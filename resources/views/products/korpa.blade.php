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
  @if(session('korpa'))



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
        @foreach($korpa as $item)
          @if($item == $product->id)
            <tr>
              <td>{{$product->name}}</td>
              <td>{{substr($product->description, 0, 20). '...'}}</td>
              <td><img width="100" height="auto" src="/images/{{$product->photo ? $product->photo : 'plejsholder.png'}}" alt="Sljika" ></td>
              <td>{{$product->price}}€</td>
              <td>1</td>
              <td>
              <form class="" action="" method="post">
                @csrf
                @method('')
                <button class="btn btn-danger" type="submit">X</button>
              </form>
              </td>
            </tr>
          @endif
        @endforeach
      @endforeach
      </tbody>
    </table>
    <form class="" action="{{route('uklonikorpasve')}}" method="post">
      @csrf
      <button class="uklonisve_dugme btn btn-danger btn-lg" type="submit">Ukloni sve</button>
    </form>
  @else
  <h1 class="text-center">Prazna korpa</h1>
  @endif


  </div>



@endsection
