<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class ExamFormController extends BaseController{
  public function myForm(){
    $options = array(
      'key1' => 'options1',
      'key2' => 'options2',
      'key3' => 'options3'
    );
    return View('exam_form.myForm')
      ->with('options', $options);
  }
}
