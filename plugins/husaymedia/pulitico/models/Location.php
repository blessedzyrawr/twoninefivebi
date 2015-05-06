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
    ];


				public function children()
    {
        return self::where('parent_id','=',$this->id)->orderby('name','asc')->get();
    }

				public function beforeValidate()
				{
								// Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
				}

				public function getParentIdOptions($key = null)
				{
								$result = [];
								$filter = 'region';
								switch ($this->type) {
												case 'province': $filter = 'region'; break;
												case 'municipality': $filter = 'province'; break;
												default: return $result;
								}


        foreach (self::where('type','=',$filter)->get() as $loc) {
            $result[$loc->id] = $loc->name;
        }
        return $result;

				}

				public function getIdByName($name)
				{
        foreach (self::where('name','=',$name)->get() as $loc) {
            return $loc->id;
        }
								return "";

				}

				public function getRegions(){
								$result = [];
								foreach (self::where('type','=','region')->get() as $loc) {
            $result[$loc->id] = $loc->name;
        }
								return $result;
				}

				public function getChildren($parent_id){
								$result = ['' => '--'];
								foreach (self::where('parent_id','=',$parent_id)->get() as $loc) {
            $result[$loc->id] = $loc->name;
        }
								return $result;
				}

				/**
     * @var array Cache for nameList() method
     */
    protected static $nameList = null;

				public static function getNameList()
    {
        if (self::$nameList)
            return self::$nameList;

        return self::$nameList = self::lists('name', 'id');
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
}