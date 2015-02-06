<?php

Class GroupFile extends Eloquent{
	
	public function group(){
		return $this->hasOne('Group');
	}

	public function owner(){
		return $this->hasOne('User');
	}





}