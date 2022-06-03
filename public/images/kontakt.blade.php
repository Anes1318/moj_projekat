@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/kontakt.css')}}">
<title>Kontakt</title>
@endsection

@section('naslov')
  <h1 class="naslov">KONTAKT</h1>
@endsection

@section('content')
  <div class="instagram-info-container">
    <a href="https://www.instagram.com/radionicaa_" target="_blank">
      <img class="instagram_slika"src="{{asset('images/sajt/instagram.png')}}" alt="">
      <h4>@radionicaa_</h4>

    </a>

  </div>


@endsection
