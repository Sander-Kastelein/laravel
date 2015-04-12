<?php


Class Skill extends Eloquent{
	

	public function users(){
		return $this->belongsToMany('User');
	}


	public function level($user){
		$su = SkillsUser::where('user_id',$user->id)->where('skill_id',$this->id)->first();
		if($su) return $su->level;
		return 0;
	}

}