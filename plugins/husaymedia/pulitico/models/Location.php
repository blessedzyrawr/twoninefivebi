<?php namespace HusayMedia\Pulitico\Models;

use Model;
use ValidationException;
use Backend\Models\User;
use \October\Rain\Database\Traits\NestedTree;
class Location extends Model {
				public $timestamps = false;
    protected $table = 'hmp_location';
				/**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];
				/*
     * Validation
     */
    public $rules = [
        'name' => 'required',
								'type' => 'required|in:province,municipality,region',
								'slug' => 'required|between:3,64|unique:hmp_location',
    ];

				public $hasMany = [
								'positions' => ['HusayMedia\Pulitico\Models\Position']
								//'children' => ['HusayMedia\Pulitico\Models\Title', 'key' => 'parent_id']
    ];

/*
				public function getChildren()
    {
        //return self::where('parent_id','=',$this->id)->orderby('name','asc')->get();

								//return		$this->filter(function($item)){
        //            	return $item->parent_id == $parent_id;
        //        });
    }
*/
				public function beforeValidate()
				{
								// Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
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
}