<?php

class Comic extends Eloquent {

	public function user() {
		#Comic belongs to many Users
		return $this->belongsToMany('User, comic_user', 'comic_id', 'user_id', 'comic_store', 'Store', 'store_id');

	}

	

}



?>