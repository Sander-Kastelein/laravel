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

        $project = Project::find(Input::get('project_id'));

        if(!$project){
            AlertRepo::add(new Alert('danger','Project niet gevonden!'));
            return Redirect::action('TeacherController@getGroups');
        }

    	$group = $user->createNewGroup(Input::get('name'),$project,$students);
    	   
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


    public function getProjects(){
        $projects = Project::all();
        $this->layout->page = View::make('pages.teachers.projects')->with('projects',$projects);
    }

    public function getNewProject(){

    }

    public function postNewProject(){
        
    }

    public function getProject($id){
        $project = Project::find($id);
        $this->layout->page = View::make('pages.teachers.project')->with('project',$project);
    }

    public function getDeleteProject($id){
        $project = Project::find($id);
        $user = Auth::user();
        if(!$project){
            AlertRepo::add(new Alert('danger','Groep bestaat niet.'));
            return Redirect::action('TeacherController@getProjects');
        }
        if($project->owner_id != $user->id){
            AlertRepo::add(new Alert('danger','Alleen de beheerder mag een project verwijderen!'));
            return Redirect::action('TeacherController@getProjects');
        }
        $name = $project->name;

        foreach($project->groups as $group){
            $group->forceDelete();
        }

        $project->forceDelete();
        AlertRepo::add(new Alert('success','Project <strong>'.$name.'</strong> verwijderd.'));
        return Redirect::action('TeacherController@getProjects');
    }

}