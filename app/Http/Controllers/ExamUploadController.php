<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class ExamUploadController extends BaseController{
  public function myUpload(Request $request){
    $myImg = '';
    $dest = 'upload/';
    $input = $request->file('img');
    if($input!=''){
      $input = time().'.'.$input->getClientOriginalExtension();
      if($request->file('img')->move($dest, $input)){
        $myImg = $dest.'/'.$input;
      }
    }
    return View('exam_upload.myUpload')
      ->with('myImg', $myImg);
  }
}
