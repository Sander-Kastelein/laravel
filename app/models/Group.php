<?php

Class Group extends ELoquent{
	
	public function users(){
		return $this->belongsToMany('User');
	}

	public function students(){
		return $this->belongsToMany('User')->where('is_teacher',false);
	}

	public function teachers(){
		return $this->belongsToMany('User')->where('is_teacher',true);
	}
	



	
}