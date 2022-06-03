@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<title>Napravi</title>
@endsection
@section('naslov')

  <h1 class="naslov">Napravi artikal</h1>
@endsection

@section('content')




  <div class="forma">

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\ProductController@store','files' => true ]) !!}
    <div class="form-group">

      {!! Form::label('name', 'Ime:') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Opis:') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('price', 'Cijena:') !!}
      {!! Form::number('price', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('photo', 'Slika:') !!}
      {!! Form::file('photo', ['class'=>'form-control-file']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Napravi artikal', ['class'=>'border border-success btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
  @include('components.form-errors')
@endsection
