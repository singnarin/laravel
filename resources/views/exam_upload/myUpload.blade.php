@extends('layouts.master')
@section('content')
<h1>Upload Example</h1>
@if($myImg!='')
{!! Html::image($myImg) !!}
@endif
<hr />
{!! Form::open(array('url' => 'myUpload', 'enctype' => 'multipart/form-data')) !!}
{!! Form::file('img') !!}
{!! Form::submit('Upload !!') !!}
{!! Form::close() !!}
@stop
