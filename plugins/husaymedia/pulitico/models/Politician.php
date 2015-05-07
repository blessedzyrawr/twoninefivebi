<?php namespace HusayMedia\Pulitico\Models;
use Str;
use Model;
use DB;
use Auth;
use ValidationException;
use Backend\Models\User;
use HusayMedia\Pulitico\Models\Testimonial;
use HusayMedia\Pulitico\Models\Title;
use HusayMedia\Pulitico\Models\Location;

class Politician extends Model {

    protected $table = 'hmp_politician';



				/*
     * Validation
     */
    public $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
								'slug' => 'required|between:3,64|unique:hmp_politician',
        'birthdate' => 'date',
								'politician_since' => 'date'
    ];


				public $hasMany = [
        'testimonials' => ['HusayMedia\Pulitico\Models\Testimonial', 'key' => 'politician_id'],
								'positions' => ['HusayMedia\Pulitico\Models\Position', 'key' => 'politician_id']
    ];

				public $hasManyThrough = [
								'titles' => [
												'HusayMedia\Pulitico\Models\Title',
												'key'        => 'title_id',
												'through'    => 'HusayMedia\Pulitico\Models\Position',
												'throughKey' => 'id'
								]
    ];

				public $attachMany = [
        'profile_images' => ['System\Models\File', 'order' => 'sort_order'],
								'field_images'			=> ['System\Models\File']
    ];

				public function crumbs(){
								$crumbs = [];
								$location_id = $this->positions[0]->location_id;
								if($location_id != 1){
												$location_id = $this->positions[0]->location_id;
												while($child = Location::select('id','name','slug','parent_id')->where('id','=',$location_id)->first()){
																$crumbs[] = $child;
																$location_id = $child->parent_id;
												}
								}else{
												$title_id = $location_id;
												while($child = Title::select('id','name','slug','parent_id')->where('id','=',$title_id)->first()){
																$crumbs[] = $child;
																$title_id = $child->parent_id;
												}

								}

								return array_reverse($crumbs);

				}

				public function beforeValidate()
				{
								// Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->firstname." ".$this->middlename." ".$this->lastname);
				}

				public function getFullName()
    {
								$fullname = "";
								if(strlen($this->middlename)>0){
												$fullname = $this->firstname . ' ' . ((strlen($this->middlename)==1) ? ($this->middlename.".") : $this->middlename) . ' ' . $this->surname;
								}else{
												$fullname = $this->firstname . ' ' . $this->surname;
								}

        return $fullname;
    }

				public function getUserTestimonial(){
        $user = Auth::getUser();
        if (!$user) return null;
								//return Testimonial::with('rating','=',1);
        //return Testimonial::where('user_id','=',$user->id)->where('politician_id','=',$this->id);

								return		$this->testimonials->filter(function($item) use ($user){
                    	return $item->user_id == $user->id;
                })->first();
    }

				public function getPositiveTestimonials(){
								return		$this->testimonials->filter(function($item){
                    	return $item->rating == 1;
                });
								//return $this->testimonials->where('rating','=',1);
        //return Testimonial::where('rating','=',1)->where('politician_id','=',$this->id);
    }
				public function getNegativeTestimonials(){
								return		$this->testimonials->filter(function($item){
                    	return $item->rating == 0;
                });
								//return $this->testimonials->where('rating','=',0);
        //return Testimonial::where('rating','=',0)->where('politician_id','=',$this->id);
    }

    public function getRating(){

        $total = count($this->testimonials);
        if($total<=0) return 0;
        $subtotal = 0;
        foreach( $this->testimonials as $rating ){
            $subtotal += ($rating->rating) ? 1 : -1;
        }
        $return = ($subtotal / $total ) * 100;
        return intval($return);

    }

				public function getLink()
    {
								$link = "";
        return $this->slug."/".$this->id;
    }

				/**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        //if (array_key_exists('positions', $this->getRelations())) {
            //$params['position'] = $this->positions->count() ? $this->positions->first()->slug : null;
        //}

        return $this->url = $controller->pageUrl($pageName, $params);
    }

				/**
     * Used to test if a certain user has permission to edit politician,
     * returns TRUE if the user is the owner or has other posts access.
     * @param User $user
     * @return bool
     */
				public function canEdit(User $user)
    {
        return $user->hasAnyAccess(['husaymedia.pulitico.manage_pulitico']);
    }

				/**
     * Used to test if a certain user has permission to add testimonials to the politician,
     * @param User $user
     * @return bool
     */
				public function canTestify(User $user)
    {
        return $user->hasAnyAccess(['husaymedia.pulitico.add_testimonial']);
    }
}