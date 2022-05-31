@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/pocetna.css')}}">

@endsection

@section('naslov')

  <h1 class="naslov">POČETNA</h1>
@endsection

@section('content')



  <div class="gallery">
    <div class="slike">
      <div class="slika1">
        <img src="/images/0-02-05-9d834b9acd332b9cbd02fa3d9bc776e911844cc5aa3b90a6d4d40c1b8ad2cf83_ae9160ffcdaace69.jpg" alt="slika1" >
      </div>
      <div class="text-container">
      <ul>
        <li><h3 class="text1">Izrada dekorativnih predmeta i personalizovanih poklona</h3></li>
      </ul>
      </div>
      <div class="slika2">
        <img src="/images/0-02-05-86521b00d4d1644c17c173a81497c5b7c6aa736170b84c7f5765f55ee45ccb3e_72189ba78579ba59.jpg" alt="slika1" >
      </div>
      <div class="text-container2">
      <ul>
        <li><h3 class="text2">Usluzno rezanje i graviranje</h3></li>
      </ul>
      </div>
    </div>
  </div>



@endsection
