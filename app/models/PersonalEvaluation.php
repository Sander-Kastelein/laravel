<?php

class PersonalEvaluation extends \Eloquent {
	protected $fillable = [];

	public function group(){
		return $this->hasOne('Group');
	}

	public function user(){
		return $this->hasOne('User');
	}




}