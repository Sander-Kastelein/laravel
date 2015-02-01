<?php


Class Project extends Eloquent{
	
	function groups(){
		return $this->hasMany('group');
	}

	function files(){
		return $this->hasMany('ProjectFile');
	}




}