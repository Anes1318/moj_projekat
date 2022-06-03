@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/edit.css')}}">
<title>Uredi</title>
@endsection




@section('content')

  <img class="slika"height="auto" width="auto" src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="">


  <div class="forma">
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\ProductController@update', $product->id],'files' => true ]) !!}
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
      {!! Form::submit('Uredi artikal', ['class'=>'border border-success btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
  @include('components.form-errors')
  </div>


@endsection
