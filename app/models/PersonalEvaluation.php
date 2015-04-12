<?php

class PersonalEvaluation extends \Eloquent {
	protected $fillable = [];

	public function group(){
		return $this->belongsTo('Group');
	}

	public function user(){
		return $this->belongsTo('User');
	}
	
	public function comments(){
		return $this->hasMany('PersonalEvaluationComment');
	}

}