@extends('layouts.master')
{{-- @include('my_template.index') --}}
@section('content')
  @if(1 == 1)
    <h1 style="color:green;">It' True</h1>
  @else
    <h1 style="color:red;">It' False</h1>
  @endif

  <ul>
  @for($i = 0; $i < 6; $i++)
    <li>
      Now is {{ $i }}
    </li>
  @endfor
  </ul>
<a class="navbar-brand" href="#">Home</a>
@stop
