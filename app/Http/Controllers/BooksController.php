<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\Category;

class BooksController extends Controller
{
  public function showBooks(){
    $model = Book::all();
    return View('test_relation.belongsTo', compact('model'));
    }

  public function showcategories(){
    $model = Category::all();
    return View('test_relation.hasMany', compact('model'));
  }

  public function create(Request $request){
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
    return View('test_relation.create')
      ->with('model', $model)
      ->with('categoryOptions',$categoryOptions);
  }

  public function read(){
    $model = Book::all();

    return View('test_relation.read')
    ->with('model', $model);
  }

  public function update(Request $request, $id=null){
    $model = Book::find($id);
    $categorySelected = $model->category_id;
    $categoryOptions = Category::lists('name', 'id');
    if($request->all()){
      $model->category_id = $request->get('category_id');
      $model->name = $request->get('name');
      $model->price = $request->get('price');
      if($model->save()){
        return Redirect('read');
      }
    }
    return View('test_relation.update')
    ->with('model', $model)
    ->with('categoryOptions', $categoryOptions)
    ->with('categorySelected', $categorySelected);
  }

  public function delete($id){
    Book::destroy($id);
    return Redirect('read');
  }

  public function myPagination(){
    $model = Book::paginate(3);
    return View('test_relation.myPagination')
    ->with('model', $model);
  }
}
