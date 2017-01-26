<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class ExamInputController extends BaseController{
  public function inputGet(Request $request){
    if ($request->has('name', 'email')) {
      $input = $request->all('name');
      return View('exam_input.inputAll')
        ->with('input', $input);
      }else{
        $input = $request->input('name');
        return View('exam_input.inputGet')
          ->with('input', $input);
      }
  }
}
