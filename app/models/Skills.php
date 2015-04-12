<?php


Class Skills extends Eloquent{
	

	public function users(){
		return $this->belongsToMany('User');
	}


	public function level($user){
		return SkillsUser::where('user_id',$user->id)->where('skill_id',$skill->id)->first()->level;
	}

}