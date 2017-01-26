@extends('layouts.master')
@section('content')
{!! Form::open(array('url'=>'inputGet')) !!}
<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('email', 'Email') !!}
  {!! Form::text('email', null,['class' => 'form-control']) !!}
  {!! Form::submit('OK', ['class' => 'btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
  Name = {{ $input['name'] }}<br />
  Email = {{ $input['email'] }}
@stop
