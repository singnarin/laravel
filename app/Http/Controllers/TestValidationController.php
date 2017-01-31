<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\Category;

class TestValidationController extends BaseController{
  public function basicValidate(Request $request){
    $model = new Book;
    $errors ='';
    $rules = array(
      'name' => 'request',
      'price' => 'request'
    );

    if($request->all()){
      $validate = Validator::make('$request->all()', $rules);
      if($validate->fails()){
        $errors = $validate->maessages();
        return Redirect('basicValidate')
          ->withErrors($errors)
          ->withInput();
      }else {
        $model->name = $request->get('name');
        $model->price = $request->get('price');
        if($model->save()){
          return "Save Success";
        }
      }
    }
    return View('test_validation.basicValidate');
  }
}
