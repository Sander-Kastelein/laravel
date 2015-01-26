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
	

	public function getTeachersAsString(){
		$string = '';
		foreach($this->teachers as $teacher){
			$string .= $teacher->name.', ';
		}
		return substr($string, 0, -2);
	}

	public function addUser(User $user){
		if($this->hasUser($user)) return false;
		$this->users()->save($user);
		return true;
	}

	public function hasUser(User $checkUser){
		foreach($this->users as $user){
			if($checkUser->id === $user->id) return true;
		}
		return false;
	}




	
}