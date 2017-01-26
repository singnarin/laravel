@extends('layouts.master')
@section('content')
{!! Form::open(array('url'=>'testPost')) !!}
<div class="form-group">
  {!! Form::label(
    'myLabel',
    'My Label !!!',
    array('style' => 'color:red;font-size:30px;')
    )
  !!}
</div>
<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('address', 'Address') !!}
  {!! Form::textArea('address', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('password', 'Password') !!}
  {!! Form::password('password',['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::hidden('id','123456789',['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::checkbox('checkbox','checkboxValue', 'checked'), 'checked' !!}
  {!! Form::checkbox('checkbox2','checkboxValue2') !!}
  {!! Form::radio('radio','radioValue') !!}
  {!! Form::radio('radio','radioValue', 'checked') !!}
</div>
<div class="form-group">
  {!! Form::label('img', 'Upload') !!}
  {!! Form::file('img', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('ddl', 'DDL = Dropdown List') !!}
  {!! Form::select('ddl', $options, null, ['class' => 'form-control']) !!}
  {!! Form::submit('Click Me!', ['class' => 'btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@stop
