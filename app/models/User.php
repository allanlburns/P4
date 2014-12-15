<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function store() {
		#Customer belongs to store
		# One-to-many relationship between stores and users:
		return $this->belongsTo('Store');

	}

	public function comic() {
		#User belongs to many Comics
		return $this->belongsToMany('Comic');

	}

	public function comic_user() {
        # User belongs to many Pulls
        return $this->belongsToMany('Comic_user');
    }

}
