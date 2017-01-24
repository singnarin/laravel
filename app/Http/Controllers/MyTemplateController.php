<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class MyTemplateController extends BaseController{
  public function index(){
    return View('my_template.index');
  }
  public function myVar(){
    return View('my_template.myVar', array(
      'var' => 'Hello This is my Var'
    ));
  }
  public function myCondition(){
    return View('my_template.myCondition');
  }
}
