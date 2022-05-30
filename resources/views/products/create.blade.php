@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/create.css')}}">

@endsection
@section('naslov')

  <h1 class="naslov">Napravi artikal</h1>
@endsection

@section('content')
  @include('components.form-errors')



  <div class="forma">
    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\ProductController@store','files' => true ]) !!}
    <div class="form-group">
      {!! Form::label('name', 'Ime:') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('meterial', 'Materijal:') !!}
      {!! Form::text('material', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('photo', 'Slika:') !!}
      {!! Form::file('photo', ['class'=>'form-control-file']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Napravi artikal', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>

@endsection
