<?php


/*
 * Studenten gedeelte
 */

Route::group(['namespace'=>'student','before' => 'auth|student'], function()
{
    Route::get('dashboard','StudentController@getDashboard');

});

/*----------------------------------------------------------------------------------------------------------------------
 *
 * Leraren gedeelte
 *
 */

Route::group(['namespace'=>'teacher','before' => 'auth|teacher'], function()
{
    Route::get('dashboard','TeacherController@getDashboard');
});

/*----------------------------------------------------------------------------------------------------------------------
 *
 * Guest gedeelte
 *
 */

Route::get('/',['before'=>'noauth','uses'=>function(){
    return Redirect::action('getLogin');
}]);

Route::get('/login',['before'=>'noauth','uses'=>'AuthController@getLogin']);
Route::post('/login',['before'=>'noauth|csrf','uses'=>'AuthController@postLogin']);