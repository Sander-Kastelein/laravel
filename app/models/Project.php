<?php


Class Project extends Eloquent{
	
	function groups(){
		return $this->hasMany('Group');
	}

	function files(){
		return $this->hasMany('ProjectFile');
	}

	function createNewFile($name,$binary,$size,$hidden=false,$mime=false){
		$file = new ProjectFile();
		$file->project_id = $this->id;
		$file->name = $name;
		$file->hidden = $hidden;
		$file->size = $size;
		if($mime) $file->mime = $mime;
		$file->file = $binary;
		if(!$file->save()) throw new Exception('Could not add file to project.');
		return $file;
	}

	public function hasStudent(User $user){
		foreach($this->groups as $group){
			if($group->hasStudent($user)) return true;
		}
		return false;
	}




}