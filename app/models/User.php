<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Collection;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public function groups(){
		return $this->belongsToMany('Group');
	}


	public function createNewGroup($name, Array $users = null){
		if(!$this->is_teacher) throw new Exception('You do not have suffficient permissions to create a group.');
		$group = new Group();
		$group->name = $name;
		$success = $group->save();
		if(!$success) throw new Exception('Could not create group!');
		$group->users()->save($this);
		if(is_null($users) || !$success) return $group;

		foreach($users as $user){
			$group->users()->save($user);
		}
		return $group;
	}

	public static function getStudents(){
		return User::where('is_teacher','=',false)->get();
	}



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


}
