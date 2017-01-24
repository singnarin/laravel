<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

Class ExamController extends BaseController {
  public function index(){
    return '"index" Method From "ExamController".';
  }
  public function myView(){
    return View('exam.myView');
  }
  public function showVar(){
    return View('exam.showVar', array(
      'var' => '1234'
    ));
  }
}
