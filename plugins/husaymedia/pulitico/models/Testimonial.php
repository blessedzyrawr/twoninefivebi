<?php namespace HusayMedia\Pulitico\Models;

use Model;
use ValidationException;
use Backend\Models\User;

class Testimonial extends Model {

    protected $table = 'hmp_testimonials';

				/*
     * Validation
     */
    public $rules = [
        'politician_id' => 'required|integer',
								'user_id' => 'required|integer',
        'rating' => 'required|boolean'
    ];

				public $belongsTo = [
	    'politician' => ['HusayMedia\Pulitico\Models\Politician'],
					'user' => ['RainLab\User\Models\User']
				];

				/**
     * Adds a testimonial for a politician
     * @param  Politician $politician_id
     * @param  User $user_id
     * @param  array $data Post data: vote[up,down], testimonial.
     * @return boolean
     */
    public static function addTestimonial($politician, $user, $data)
    {
        $testi = new static;
        $testi->politician_id = $politician->id;
        $testi->user_id = $user->id;
        $testi->rating = array_get($data, 'vote', TRUE);
        $testi->comment = array_get($data, 'testimonial');
								$testi->save();
        return $testi;
    }

				/**
     * Used to test if a certain user has permission to edit testimonial,
     * returns TRUE if the user is the owner or has other posts access.
     * @param User $user
     * @return bool
     */
				public function canEdit(User $user)
    {
        return $user->hasAnyAccess(['husaymedia.pulitico.manage_pulitico']);
    }
}