@extends('layouts.main-layout')

@section('links')
<link rel="stylesheet" href="{{asset('css/artikli.css')}}">
<title>Artikli</title>
@endsection

@section('naslov')

  <h1 class="naslov">ARTIKLI</h1>
@endsection

@section('content')


  @if(Auth::check())
    <div class="tabela">
      <table style="width: 80%" class="table table-bordered" id="dataTable" cellspacing="0">
        @if(session('artikal-created-message'))
          <div class="alert alert-success">
            {{Session::get('artikal-created-message')}}
          </div>
          @elseif(session('artikal-updated-message'))
          <div class="alert alert-success">
            {{Session::get('artikal-updated-message')}}
          </div>@elseif(session('artikal-deleted-message'))
          <div class="alert alert-danger">
            {{Session::get('artikal-deleted-message')}}
          </div>
        @endif
        @if($products)
        <thead>
          <tr>

            <th>Id</th>
            <th>Ime</th>
            <th style="width: 11%">Slika</th>
            <th style="width: 30%">Opis</th>
            <th>Cijena</th>
            <th style="width: 11%">Datum pravljenja</th>
            <th style="width: 11%">Datum uredjivanja</th>
            <th style="width: 5%">Izbrisi</th>
            <th style="width: 5%">Uredi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td><img height="100" width="100%" src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt=""></td>
              <td>{{substr($product->description, 0, 60). '...'}}</td>
              <td>{{$product->price}}€</td>
              <td>{{$product->created_at->diffForHumans()}}</td>
              <td>{{$product->updated_at->diffForHumans()}}</td>
              <td>
                  <form class="" action="{{route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Izbrisi</button>
                  </form>
              </td>
              <td>
                  <form class="" action="{{route('products.edit', $product->id)}}" method="post">
                    @csrf
                    @method('GET')
                    <button class="btn btn-success" type="submit">Uredi</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        @endif
      </table>
    </div>
  @else
  @if($products)
    @foreach($products as $product)

          <div class="gallery">
            <div class="slike">
              <a target="_blank" href="#">
                <img src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="Forest" width="600" height="400">
              </a>
              <div class="desc_name"><h4>{{$product->name}}</h4></div>
              <div class="desc"><h5>Materijal: {{$product->material}}</h5></div>
              </div>
          </div>

    @endforeach
  @endif
  @endif


@endsection
