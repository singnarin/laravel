@extends('layouts.master')
@section('content')
<h1>basicValidate</h1>
{!! Form::open() !!}

<ul>
  @foreach($errors->all() as $error)
    <li>
      {{ $error }}
    </li>
  @endforeach
</ul>

{!! Form::label('name') !!}
{!! Form::text('name') !!}<br />
{!! Form::label('price') !!}
{!! Form::text('price') !!}<br />
{!! Form::submit('Save !') !!}
{!! Form::close() !!}
@stop
