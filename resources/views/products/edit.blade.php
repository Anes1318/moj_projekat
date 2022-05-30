@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/edit.css')}}">

@endsection

@section('naslov')

  <h1 class="naslov">Uredi artikal</h1>
@endsection


@section('content')


  <div class="forma">
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\ProductController@update', $product->id],'files' => true ]) !!}
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
      {!! Form::submit('Uredi artikal', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>


@endsection
