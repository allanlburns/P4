<?php

class Pull extends Eloquent {

	public function comic() {
        # Pulls belong to many Comics
        return $this->belongsToMany('Comic');
    }

    public function user() {
        # Pulls belong to many Users
        return $this->belongsToMany('User');
    }
	

}