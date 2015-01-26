<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:09
 */

Class StudentController extends BaseController{

    public function getDashboard(){
        $this->layout->page = View::make('pages.students.dashboard');
    }

    public function getGroups(){
    	$groups = Auth::user()->groups;
    	$this->layout->page = View::make('pages.students.groups')->with('groups',$groups);
    }

    public function getGroup($id){
    	$group = Group::find($id);
    	$user = Auth::user();
    	if(!$group->hasUser($user)) return Redirect::action('StudentController@getGroups');
    	$this->layout->page = View::make('pages.students.group')->with('group',$group);
    }


}