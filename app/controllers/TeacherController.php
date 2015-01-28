<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:10
 */

Class TeacherController extends BaseController{

    public function getDashboard(){
        $this->layout->page = View::make('pages.teachers.dashboard');
    }

    public function getGroups(){
    	$user = Auth::user();
    	$groups = $user->groups;
    	$this->layout->page = View::make('pages.teachers.groups')->with('groups',$groups);

    }

    public function getGroup($id){
    	$group = Group::find($id);
    	$user = Auth::user();
    	if(!$group->hasUser($user)) return Redirect::action('TeacherController@getGroups');
    	$this->layout->page = View::make('pages.teachers.group')->with('group',$group);
    }

    public function getNewGroup(){
    	$this->layout->page = View::make('pages.teachers.new_group');
    }

    public function postNewGroup(){
    	$user = Auth::user();
    	$students = Input::get('students');
    	foreach($students as $k=>$v){
    		$students[$k] = User::find($v);
    	}
    	$group = $user->createNewGroup(Input::get('name'),$students);
    	dd("Groep aangemaakt");
    }

}