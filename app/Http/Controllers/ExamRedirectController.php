<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class ExamRedirectController extends BaseController{
  public function display(){
    return View('exam_redirect.display');
  }
  public function goToDisplay(){
    return Redirect('display');
  }
  public function getText(){
    return View('exam_redirect.getText');
  }
  public function setText(){
    return Redirect('getText')
    ->with('text', 'Text From setText Method.');
  }
}
