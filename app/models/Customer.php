<?php

class Customer extends Eloquent {

	public function store() {
		#Customer belongs to store
		# One-to-many relationship between stores and customers:
		return $this->belongsTo('Store');

	}

	public function comic() {
		#Customer belongs to many Comics
		return $this->belongsToMany('Comic');

	}
}

?>