<?php


Class Skills extends Eloquent{
	

	public function users(){
		return $this->belongsToMany('User');
	}


}