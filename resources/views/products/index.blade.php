@extends('layouts.main-layout')



@section('content')

  <h1>index</h1>



  @if(Auth::check())
    <h1>admin</h1>
  @endif

@endsection
