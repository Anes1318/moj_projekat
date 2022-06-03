@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/pocetna.css')}}">
<title>Početna</title>
@endsection



@section('content')



@if($products)
  @foreach($products as $product)

        <div class="wrapper">
          <div class="product">
              <a target="_blank" href="#">
                <img src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="Forest" width="600" height="400">
              </a>
              <div class="product-name"><h4>{{$product->name}}</h4></div>
              <div class="desc"><h5>{{substr($product->description, 0,5)}}</h5></div>
            </div>
        </div>
      
  @endforeach
@endif



@endsection
