<?php

class Store extends Eloquent {

	public function customer() {
		#Store has many customers
		# One-to-many relationship between stores and customers:
		return $this->hasMany('Customer');

	}

	public function comic() {
		#Store belongs to many Comics
		return $this->belongsToMany('Comic');

	}
}

?>