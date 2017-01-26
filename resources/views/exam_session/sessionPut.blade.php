@extends('layouts.master')
@section('content')
<h1>Session::put</h1>
{{--
Session = {{ Session::get('Myname') }}
@foreach(Session::get('myTime') as $time)
now = {{ $time }} ,<br>
@endforeach
--}}

{{ print_r(Session::all()) }}
@stop
