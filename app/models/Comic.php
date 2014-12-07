<?php

class comic extends Eloquent {

	public function store() {
		#Comic belongs to store
		# One-to-many relationship between stores and comics:
		return $this->belongsTo('Store');

	}
	

}



?>