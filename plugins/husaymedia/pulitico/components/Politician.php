<?php namespace HusayMedia\Pulitico\Components;
use Flash;
use Auth;
use RainLab\User\Models\User as UserModel;
use HusayMedia\Pulitico\Models\Testimonial as TestiModel;
use HusayMedia\Pulitico\Models\Politician as PoliticianModel;
use Cms\Classes\ComponentBase;
use Session;
use Str;
use Exception;
class Politician extends ComponentBase
{
    /**
     * @var HusayMedia\Pulitico\Models\Politician The politician model used for display.
     */
    public $politician;

    /**
     * @var Collection of Testimonials for this politician.
     */
    public $testimonials = null;

    /**
     * @var HusayMedia\Pulitico\Models\Politician The politician's full name used for display.
     */
    public $fullname;

    public $politician_id;
    public $slug;

    public $url;

    public function componentDetails()
    {
        return [
            'name'        => 'husaymedia.pulitico::lang.settings.pulitico_name',
            'description' => 'husaymedia.pulitico::lang.settings.pulitico_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'husaymedia.pulitico::lang.settings.politician_slug_name',
                'description' => 'husaymedia.pulitico::lang.settings.politician_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'politician_id' => [
                'title'       => 'husaymedia.pulitico::lang.settings.politician_id_name',
                'description' => 'husaymedia.pulitico::lang.settings.politician_id_name',
                'default'     => '{{ :politician_id }}',
                'type'        => 'string'
            ]
        ];
    }






    public function getPolitician()
    {

        $return = PoliticianModel::find($this->property('politician_id'));



        return $return;
    }


    public function onRun()
    {
        $this->politician = $this->page['politician'] = $this->getPolitician();
    }

    public function onAddTestimonial()
    {
        try {
            if (!$user = Auth::getUser()) {
                throw new ApplicationException('You should be logged in.');
            }
            $this->politician = $this->page['politician'] = $this->getPolitician();

            $this->page['testimonial'] = $result = TestiModel::addTestimonial($this->politician, $user, post());


            if($result)
            {
                Session::flash('recalculator', Str::random(20));
                Flash::success(post('flash', 'Your testimonial has been saved!'));
            }
            else
            {
                throw new ValidationException(errors()->first());
            }

            /*
             * Extensbility

            Event::fire('rainlab.forum.topic.post', [$this, $post, $postUrl]);
            $this->fireEvent('topic.post', [$post, $postUrl]);
            */


        }
        catch (Exception $ex) {
            Flash::error($ex->getMessage());
        }
    }

    public function onEditTestimonial()
    {
        try {
            if (!$user = Auth::getUser()) {
                throw new ApplicationException('You should be logged in.');
            }
            $politician = $this->getPolitician();
            $testimonial = TestiModel::where('user_id','=',$user->id)->where('politician_id','=',$politician->id)->first();
            $testimonial->rating = post('vote');
            $testimonial->comment = post('testimonial');
            $testimonial->save();
            $this->page['testimonial'] = $testimonial;

            //get new instance of politician with updated testimonials
            $this->page['politician'] = $politician = $this->getPolitician();

            if($result)
            {
                Session::flash('recalculator', Str::random(20));
                Flash::success(post('flash', 'Your testimonial has been edited!'));
            }
            else
            {
                throw new ValidationException(errors()->first());
            }

            /*
             * Extensbility

            Event::fire('rainlab.forum.topic.post', [$this, $post, $postUrl]);
            $this->fireEvent('topic.post', [$post, $postUrl]);
            */


        }
        catch (Exception $ex) {
            Flash::error($ex->getMessage());
        }
    }

    public function onRecalculateRating(){
        if (!Session::has('recalculator'))
        {
            $this->page['politician'] = $this->getPolitician();
        }
        else
        {
            $this->page['politician'] = null;
            Flash::error("Cannot perform function at this time.");
        }
    }



}
