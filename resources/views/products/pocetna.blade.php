@extends('layouts.main-layout')

@section('naslov')

  <h1 class="naslov">POČETNA</h1>


@endsection
@section('content')

  @if($products)
    @foreach($products as $product)
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="#">
              <img src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="Forest" width="600" height="400">
            </a>
            <div class="desc_name">{{$product->name}}</div>
            <div class="desc">Materijal: {{$product->material}}</div>
          </div>
        </div>
    @endforeach
  @endif




@endsection
