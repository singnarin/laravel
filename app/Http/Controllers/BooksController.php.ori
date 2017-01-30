<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\Model;

class book extends BaseController{
  protected $table = 'book';
  public function testBelongsTo(){
    $model = App\books::all();
    return View('test_relation.belongsTo')
      ->with('model', $model);
  }
}
