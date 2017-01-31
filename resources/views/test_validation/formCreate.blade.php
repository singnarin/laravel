@extends('layouts.master')
@section('content')
<h1>basicValidate</h1>
<form action="create" method="POST">
<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
{!! Form::label('category_id', 'Category') !!}
{!! Form::select('category_id', $categoryOptions) !!}<br />
{!! Form::label('name') !!}
{!! Form::text('name') !!}<br />
{!! Form::label('price') !!}
{!! Form::text('price') !!}<br />
{!! Form::submit('Insert !') !!}
</form>
@stop
