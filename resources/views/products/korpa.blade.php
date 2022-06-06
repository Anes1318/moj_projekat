@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/korpa.css')}}">
<title>Korpa</title>
@endsection



@section('content')


    @if(session('korpa-uklonjeno-message'))
      <div class="alert alert-success">
        {{Session::get('korpa-uklonjeno-message')}}
      </div>
    @endif


  <div class="tabela">
  @if(Session::has('cart'))



    <table class="table " cellspacing="0">
      <thead>
        <tr>
          <th>Ime</th>
          <th>Opis</th>
          <th>Slika</th>
          <th>Cijena</th>
          <th>Kolicina</th>
          <th>Ukloni</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product['item']['name']}}</td>
          <td>{{substr($product['item']['description'], 0, 20). '...'}}</td>
          <td><img width="100" height="auto" src="/images/{{$product['item']['photo'] ? $product['item']['photo'] : 'plejsholder.png'}}" alt="Sljika" ></td>
          <td>{{$product['item']['price']}}€</td>
          <td>{{$product['qty']}}
            <div class="plus_minut_dugmad">
              <form class="plus_dugme" action="{{route('dodajkorpa')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product['item']['id']}}">
                <button class="border border-success btn-sm" type="submit">+</button>
              </form>
              <form class="minus_dugme" action="{{route('smanji')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product['item']['id']}}">
                <button class="border border-danger btn-sm" type="submit">-</button>
              </form>
            </div>
          </td>
          <td>
          <form class="" action="{{route('ukloniItem')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product['item']['id']}}">
            <button class="btn btn-danger" type="submit">X</button>
          </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <hr style="width:80%;">
    <div class="dolje">
      <form class="" action="{{route('uklonikorpasve')}}" method="post">
        @csrf
        <button class="uklonisve_dugme btn btn-danger btn-lg" type="submit">Ukloni sve</button>
        <h3 class="ukupno">Ukupno:{{$totalPrice}}€</h3>
      </form>
    </div>


  @else
  <h1 class="text-center">Prazna korpa</h1>
  @endif


  </div>



@endsection
