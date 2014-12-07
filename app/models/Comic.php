<?php

class comic extends Eloquent {

	public function store() {
		#Comic belongs to many stores
		# Many-to-many relationship between stores and comics:
		return $this->belongsToMany('Store');

	}

	public function customer() {
		#Comic belongs to many Customers
		return $this->belongsToMany('Customer');

	}
	

}



?>