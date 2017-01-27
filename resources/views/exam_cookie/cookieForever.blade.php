@extends('layouts.master')
@section('content')
<h1>Cookie::forever</h1>
@if (cookie('name') != null)
<p>cookie is set</p>
<p>
  {{$cookie}}
</p>
@else
<p>cookie isn't set</p>
@endif
@foreach(cookie('name') as $key)
  {{$key}}
@endforeach
@stop
