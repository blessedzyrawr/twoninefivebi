<?php namespace HusayMedia\Pulitico\Models;

use Model;
use ValidationException;
use Backend\Models\User;

class Title extends Model {
				public $timestamps = false;
				/**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];
    protected $table = 'hmp_title';

				/*
     * Validation
     */
    public $rules = [
								'name' => 'required'
    ];

				public $hasMany = [
								'positions' => ['HusayMedia\Pulitico\Models\Position']
    ];


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

				public function children()
    {

								return self::has('positions', '>', 1)->where('parent_id','=',$this->id)->orderby('name','asc')->get();

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