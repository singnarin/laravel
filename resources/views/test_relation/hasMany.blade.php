@extends('layouts.master')
@section('content')
<h1>hasMany</h1>
@foreach($model as $category)
  <h4>Category : {{$category->name}}</h4>
  <ul>
    @foreach($category->Book as $book)
      <li>
        Name : {{$book->name}}
      </li>
      <li>
        Price : {{$book->price}}
      </li>
      @endforeach
  </ul>
@endforeach
@stop
