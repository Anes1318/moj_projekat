@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/pocetna.css')}}">
<title>Početna</title>
@endsection



@section('content')


  @if(session('productKorpa-added-message'))
  <div class="sesija alert alert-success">
    {{Session::get('productKorpa-added-message')}}
    <form class="dodajkorpa_session_dugme" action="{{route('viewkorpa')}}" method="get">
      @csrf
      <button class="btn btn-primary" type="submit">Poseti korpu</button>
    </form>
  </div>
@endif
@if($products)
  @foreach($products as $product)

  <div class="gallery">
    <div class="slike">
      <a target="_blank" href="#">
        <img src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="Forest" width="600" height="400">
      </a>
      <div class="desc_name">{{$product->name}}</div>
      <div class="desc_name">{{substr($product->description, 0, 20).'...'}}</div>
      <div class="price">{{$product->price}}€</div>
      <form class="dugme_dodaj_korpu" action="{{route('dodajkorpa')}}" method="post">
        @csrf
        <input type="hidden" name="korpa" value="{{$product->id}}">
        <button class="btn btn-primary btn-sm" type="submit">Dodaj u korpu</button>
      </form>
    </div>
  </div>

  @endforeach
@endif



@endsection
