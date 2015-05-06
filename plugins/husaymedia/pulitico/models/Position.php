<?php namespace HusayMedia\Pulitico\Models;

use Model;
use ValidationException;
use Backend\Models\User;

class Position extends Model {
				public $timestamps = false;
    protected $table = 'hmp_position';
				/**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];
				/*
     * Validation
     */
    public $rules = [
        'politician_id' => 'integer',
								'title_id' => 'required|integer',
								'location_id' => 'integer',
        'term' => 'required',
								'status' => 'required|in:current,former,candidate'
    ];

				public $belongsTo = [
								'politician' => ['HusayMedia\Pulitico\Models\Politician'],
								'location' => ['HusayMedia\Pulitico\Models\Location'],
								'title' => ['HusayMedia\Pulitico\Models\Title']
				];

				public function getTitleIdOptions()
    {
        return Title::getNameList();
    }

    public function getLocationIdOptions()
    {
        return Location::getNameList();
    }

				public static function labels(){

								return self::select('title.parent_id','title.id','title.name','location.parent_id','location.id','location.name','position.status','position.politician_id')
																				->leftJoin('title', function($join) {
																								$join->on('politician.title_id', '=' , 'title.id');
																				})
																				->leftJoin('location', function($join) {
																								$join->on('politician.location_id', '=' , 'location.id');
																				});

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