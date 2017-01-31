@extends('layouts.master')
@section('content')
<h1>create</h1>
{!! Form::open(array('url'=>'create')) !!}
{!! Form::label('category_id', 'Category') !!}
{!! Form::select('category_id', $categoryOptions) !!}<br />
{!! Form::label('name') !!}
{!! Form::text('name') !!}<br />
{!! Form::label('price') !!}
{!! Form::text('price') !!}<br />
{!! Form::submit('Insert !') !!}
{!! Form::close() !!}
@stop
