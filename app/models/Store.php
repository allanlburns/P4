<?php

class Store extends Eloquent {

	public function user() {
		#Store has many customers
		# One-to-many relationship between stores and users:
		return $this->hasMany('User');

	}

	public function comic() {
		#Store belongs to many Comics
		return $this->belongsToMany('Comic');

	}
}

?>