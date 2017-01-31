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

class TestValidationController extends Controller{

  public function basicValidate(Request $request){
    
      $model = new Book;
      $categoryOptions = Category::lists('name', 'id');

        if($request->all()){
          $model->category_id = $request->get('category_id');
          $model->name = $request->get('name');
          $model->price = $request->get('price');
          $model->created = date('Y-m-d');

            if($model->save()){
              return "Save Success.";
            }
          }
        }
    return View('test_validation.basicValidate');
  }
}
