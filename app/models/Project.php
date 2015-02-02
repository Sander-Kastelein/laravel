<?php


Class Project extends Eloquent{
	
	function groups(){
		return $this->hasMany('Group');
	}

	function files(){
		return $this->hasMany('ProjectFile');
	}




}