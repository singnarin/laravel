@extends('layouts.master')
@section('content')
<h1>Request::url()</h1>
{!! Request::url() !!}<br />
{!! Request::path() !!}<br />
{!! Request::segment(1) !!}
@stop
