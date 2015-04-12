<?php


/*
 * Studenten gedeelte
 */

Route::group(['prefix'=>'student','before' => 'auth|student'], function()
{
    Route::get('dashboard',['uses'=>'StudentController@getDashboard']);
    Route::get('groups','StudentController@getGroups');
    Route::get('group/{id}','StudentController@getGroup')->where('id', '[0-9]+');
    Route::get('project/file/download/{id}','StudentController@getProjectFileDownload');
    Route::get('/group/{id}/upload','StudentController@getUploadFile');
    Route::post('/group/upload','StudentController@postUploadFile');
    Route::get('/group/{id}/download/{groupFileId}','StudentController@getFileDownload');

    Route::get('/group/{id}/personalevaluation/new','StudentController@getNewPersonalEvaluation');
    Route::post('/group/{id}/personalevaluation/new','StudentController@postNewPersonalEvaluation');

    Route::get('/pe/{id}','StudentController@getPersonalEvaluation');
    Route::post('/pe/{id}/addcomment','StudentController@postAddComment');
    Route::get('pes','StudentController@getPersonalEvaluations');

});

/*----------------------------------------------------------------------------------------------------------------------
 *
 * Leraren gedeelte
 *
 */

Route::group(['prefix'=>'teacher','before' => 'auth|teacher'], function()
{
    Route::get('dashboard',['uses'=>'TeacherController@getDashboard']);
    Route::get('groups','TeacherController@getGroups');
    Route::get('group/{id}','TeacherController@getGroup')->where('id', '[0-9]+');
    Route::get('group/new','TeacherController@getNewGroup');
    Route::post('group/new','TeacherController@postNewGroup');
    Route::get('group/delete/{id}','TeacherController@getDeleteGroup');

    Route::get('projects','TeacherController@getProjects');
    Route::get('project/new','TeacherController@getNewProject');
    Route::post('project/new','TeacherController@postNewProject');
    Route::get('project/{id}','TeacherController@getProject')->where('id', '[0-9]+');
    Route::get('project/delete/{id}','TeacherController@getDeleteProject');
    Route::get('project/file/download/{id}','TeacherController@getProjectFileDownload');
    Route::get('project/file/upload/{id}','TeacherController@getUploadProjectFile');
    Route::post('project/file/upload','TeacherController@postUploadProjectFile');
    Route::get('project/file/delete/{id}','TeacherController@getDeleteProjectFile');

    Route::get('/pe/{id}','TeacherController@getPersonalEvaluation');
    Route::post('/pe/{id}/addcomment','TeacherController@postAddComment');
    Route::get('pes','TeacherController@getPersonalEvaluations');

    Route::get('user/{id}','TeacherController@getUser');

    Route::get('users','TeacherController@getUsers');
    Route::get('users/adduser','TeacherController@getAddUser');
    Route::post('users/adduser','TeacherController@postAddUser');
    Route::get('user/{id}/edit','TeacherController@getEditUser');
    Route::post('user/{id}/edit','TeacherController@postEditUser');



});

/*----------------------------------------------------------------------------------------------------------------------
 *
 * Guest gedeelte
 *
 */

Route::get('/',['before'=>'noauth','uses'=>function(){
    return Redirect::action('AuthController@getLogin');
}]);

Route::get('/login',['before'=>'noauth','uses'=>'AuthController@getLogin']);
Route::post('/login',['before'=>'noauth|csrf','uses'=>'AuthController@postLogin']);
Route::get('/logout',['before'=>'auth','uses'=>'AuthController@getLogout']);