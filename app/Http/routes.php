<?php
use Illuminate\Http\Request; // เรียกใช้งานคลาส Request
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testGet', function(){
  return 'Test Get Route !';
});

Route::post('testPost', function() {
  return 'Test Post Route !';
});

Route::get('loadForm', function(){
  return View::make('testForm');
});

Route::any('anyRoute', function(){
  return 'For Any Route !';
});
Route::get('myId/{id}', function($id){
  return 'Id = '.$id. ' from regular expression route.';
})
->where('id', '[0-9]+');;
Route::get('myName/{name?}', function($name = null){
  return 'name = '.$name. ' from regular expression route.';
})
->where('name', '[A-Za-z]+');
Route::get('myId-Name/{id}/{name}', function($id, $name){
  return 'id = ' .$id.' and name = '.$name.' use array regex.';
})
->where(array('id' => '[0-9]+', 'name' => '[A-Za-z]+'));
Route::group(array('prefix' => 'admin'), function(){
  Route::get('user', function(){
    return 'From admin/user';
  });
});
Route::get('testView', function(){
  return View::make('testView');
});
Route::get('passVar', function(){
  return View::make('passVar', array(
    'name' => 'Hope'
  ));
});
Route::get('/exam/index', 'ExamController@index');
Route::get('/exam/myView', 'ExamController@myView');
Route::get('/exam/showVar', 'ExamController@showVar');
Route::get('goToDisplay', 'ExamRedirectController@goToDisplay');
Route::get('display', 'ExamRedirectController@display');
Route::get('setText', 'ExamRedirectController@setText');
Route::get('getText', 'ExamRedirectController@getText');
Route::get('Okay', 'HomeController@okay');
Route::get('MyTemplate', 'MyTemplateController@index');
Route::get('myVar', 'MyTemplateController@myVar');
Route::get('myCondition', 'MyTemplateController@myCondition');
Route::get('myForm', 'examFormController@myForm');
Route::get('url', 'ExamRequestController@url');
Route::any('inputGet', 'ExamInputController@inputGet');
