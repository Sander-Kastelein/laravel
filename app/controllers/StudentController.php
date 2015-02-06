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

    public function getProjectFileDownload($id){
        $file = ProjectFile::find($id);
        $user = Auth::user();
        if(!$file->project->hasStudent($user)){
            AlertRepo::add(new Alert('danger','Je hebt geen toegang tot deze file'));
            return Redirect::action('StudentController@getDashboard');
        }

        header('Content-Description: File Transfer');
        header('Content-Type: '.$file->mime);
        header('Content-Disposition: attachment; filename="'.$file->name.'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: '.$file->size);
        die($file->file);
    }


}