@extends('layouts.main-layout')



@section('content')

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

  <h1 class="artikli_title">Artikli</h1>

  <table style="width: 80%" class="table table-bordered" id="dataTable" cellspacing="0">
    @if($products)
    <thead>
      <tr>

        <th>Id</th>
        <th>Ime</th>
        <th style="width: 11%">Slika</th>
        <th style="width: 11%">Materijal</th>
        <th style="width: 11%" >Datum pravljenja</th>
        <th style="width: 11%">Datum uredjivanja</th>
        <th style="width: 10%">Izbrisi</th>
        <th style="width: 10%">Uredi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td><img height="100" width="100%" src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt=""></td>
          <td>{{$product->material}}</td>
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

@endsection