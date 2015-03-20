<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:09
 */
use \Technasium\Alert;

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

    public function getUploadFile($id){
        $group = Group::find($id);
        $this->layout->page = View::make('pages.students.upload_file')->with('group',$group);
    }

    public function postUploadFile(){
        $group = Group::find(Input::get('group_id'));
        $user = Auth::user();

        if(!Input::hasFile('file')){
            AlertRepo::add(new Alert('danger','Kon file niet vinden.'));
            return Redirect::action('StudentController@getUploadFile',['id'=>$group->id]);
        }
        $file = Input::file('file');

        $size = $file->getSize();
        $mime = $file->getMimeType();
        $name = $file->getClientOriginalName();
        $binary = file_get_contents($file);

        $file = $group->createNewFile($name,$binary,$size,$user->id,$mime);

        AlertRepo::add(new Alert('success','File geupload'));
        return Redirect::action('StudentController@getGroup',['id'=>$group->id]);

    }

    public function getFileDownload($id,$groupFileId){
        $file = GroupFile::findOrFail($id);

        $user = Auth::user();
        if(!$file->group->hasStudent($user)){
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

    public function getNewPersonalEvaluation($id){
        $group = Group::findOrFail($id);
        $user = Auth::user();
        $this->layout->page = View::make('pages.students.new_personal_evaluation')->with('group',$group)->with('user',$user);
    }

    public function postNewPersonalEvaluation($id){
        $group = Group::findOrFail($id);
        $user = Auth::user();

       $pe = new PersonalEvaluation();
       $pe->user_id = $user->id;
       $pe->group_id = $group->id;
       $pe->content = Input::get('html');


    }




}