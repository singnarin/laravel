@extends('layouts.master')
@section('content')
<h1>blongsTo</h1>
@foreach($model as $value)
  <b>Category : </b>{{ $value->Category->name }}<br />
  <b>Name : </b>{{ $value->name }}<br />
  <b>Price : </b>{{ $value->price }}<br />
@endforeach
@stop
