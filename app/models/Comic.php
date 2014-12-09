<?php

class comic extends Eloquent {

	public function store() {
		#Comic belongs to many stores
		# Many-to-many relationship between stores and comics:
		return $this->belongsToMany('Store');

	}

	public function user() {
		#Comic belongs to many Users
		return $this->belongsToMany('User');

	}

	public function pull() {
        # Comic belongs to many Pulls
        return $this->belongsToMany('Pull');
    }
	

}



?>