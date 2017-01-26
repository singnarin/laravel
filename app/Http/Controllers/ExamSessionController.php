<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class ExamSessionController extends BaseController{
  public function sessionPut(){
    //Session::put('myName', 'Hope');
    //Session::push('myTime', date('H:i:s'));
    //return View('exam_session.sessionPut');
    //Session::all();
    Session::flush();
    return View('exam_session.sessionPut');
  }
}
