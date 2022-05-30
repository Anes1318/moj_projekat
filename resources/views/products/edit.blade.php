@extends('layouts.main-layout')



@section('content')

  <h1 class="uredi_artikal_title">Uredi artikal</h1>

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


@endsection
