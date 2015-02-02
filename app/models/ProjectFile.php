<?php


Class ProjectFile extends Eloquent{
	

	public function project(){
		return $this->belongsTo('Project');
	}






}