<?php

class Store extends Eloquent {

	public function comic() {
		#Store has many comics
		# One-to-many relationship between stores and comics:
		return $this->hasMany('Comic');

	}
}

?>