<?php

namespace App\Http\Controllers;
use Session;
use Cookie;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
/**
 *
 */
class ExamCookieController extends BaseController
{

  public function cookieForever()
  {
    $cookie = Cookie::forever('name', 'value',60);
    return view('exam_cookie.cookieForever')
      ->with ('name', $cookie);
  }
}
