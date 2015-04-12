<?php

class PersonalEvaluationComment extends \Eloquent {
	protected $fillable = [];

	public function owner(){
		return $this->belongsTo('User','owner_id');
	}

	public function personalEvaluation(){
		return $this->belongsTo('personalEvaluation');
	}

	




}