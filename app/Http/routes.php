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
  return 'Id = '.$id;
});
Route::get('myName/{mane?}', function($name = null){
  return 'name ='.$name;
});
