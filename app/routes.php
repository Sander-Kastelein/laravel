<?php


/*
 * Studenten gedeelte
 */

Route::group(['prefix'=>'student','before' => 'auth|student'], function()
{
    Route::get('dashboard',['uses'=>'StudentController@getDashboard']);
    Route::get('groups','StudentController@getGroups');
    Route::get('group/{id}','StudentController@getGroup')->where('id', '[0-9]+');
    Route::get('test',function(){
    	$user = Auth::user();
    	$groups = $user->groups;
    	var_dump($groups[0]->users->toJson());

    });
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
    Route::get('project/{id}','TeacherController@getProject');
    Route::get('project/delete/{id}','TeacherController@getDeleteProject');
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