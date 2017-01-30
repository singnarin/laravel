<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BooksController extends Controller
{
  public function showBooks(){
    $model = Book::all();
    return View('test_relation.belongsTo', compact('model'));
    }
}
