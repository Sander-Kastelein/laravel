<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:10
 */
use \Technasium\Alert;


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
    	   
        AlertRepo::add(new Alert('success','Nieuwe groep <strong>'.$group->name.'</strong> aangemaakt.'));
        return Redirect::action('TeacherController@getGroups');
    }

    public function getDeleteGroup($id){
        $group = Group::find($id);
        $user = Auth::user();
        if(!$group){
            AlertRepo::add(new Alert('danger','Groep bestaat niet.'));
            return Redirect::action('TeacherController@getGroups');
        }
        if(!$group->hasTeacher($user)) return Redirect::action('TeacherController@getGroups');
        $name = $group->name;
        $group->forceDelete();
        AlertRepo::add(new Alert('success','Groep <strong>'.$name.'</strong> verwijderd.'));
        return Redirect::action('TeacherController@getGroups');
    }

}