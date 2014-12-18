<?php

class Comic extends Eloquent {

	public function users() {
		#Comic belongs to many Users
		return $this->belongsToMany('User');

	}

	public function stores() {
		#Comic belongs to many Users
		return $this->belongsToMany('Store');

	}

}



?>