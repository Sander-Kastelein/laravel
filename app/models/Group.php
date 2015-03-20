<?php

Class Group extends ELoquent{
	
	public function users(){
		return $this->belongsToMany('User');
	}

	public function project(){
		return $this->belongsTo('Project');
	}

	public function students(){
		return $this->belongsToMany('User')->where('is_teacher',false);
	}

	public function teachers(){
		return $this->belongsToMany('User')->where('is_teacher',true);
	}

	public function files(){
		return $this->hasMany('GroupFile');
	}

	public function personalEvaluation(){
		return $this->belongsToMany('PersonalEvaluation');
	}
	

	public function getTeachersAsString(){
		$string = '';
		foreach($this->teachers as $teacher){
			$string .= $teacher->name.', ';
		}
		return substr($string, 0, -2);
	}

	public function createNewFile($name,$binary,$size,$user_id,$mime=false){
		$file = new GroupFile();
		$file->group_id = $this->id;
		$file->user_id = $user_id;
		$file->name = $name;
		$file->size = $size;
		if($mime) $file->mime = $mime;
		$file->file = $binary;
		if(!$file->save()) throw new Exception('Could not add file to project.');
		return $file;
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

	public function hasStudent(User $checkStudent){
		if($checkStudent->is_teacher) return false;
		foreach($this->users as $user){
			if($checkStudent->id === $user->id) return true;
		}
		return false;
	}

	public function hasTeacher(User $checkTeacher){
		if(!$checkTeacher->is_teacher) return false;
		foreach($this->users as $user){
			if($checkTeacher->id === $user->id) return true;
		}
		return false;
	}




	
}