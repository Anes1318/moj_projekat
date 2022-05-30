<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Anesov super vebsajt" content="Malo sutra">
    <title>Pocetna</title>

    <!-- links -->
    <link rel="stylesheet" href="{{asset('css/pocetna.css')}}">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  </head>
  <body>
      <header>
        <nav>
          <div class="navigejsn">
            @if(Auth::check())
            <form class="create_dugme" action="{{route('products.create')}}" method="get">
              @csrf
              <button class="btn btn-primary btn-lg" type="submit">Napravi artikal</button>
            </form>
            <form class="svi_artikli_dugme" action="{{route('artikli')}}" method="get">
              @csrf
              <button class="btn btn-primary btn-lg" type="submit">Svi artikli</button>
            </form>
            @endif
            <form class="o_nama_dugme" action="{{route('o_nama')}}" method="get">
              @csrf
              <button class="btn btn-primary btn-lg" type="submit">O nama</button>
            </form>
            <form class="kontakt_dugme" action="{{route('kontakt')}}" method="get">
              @csrf
              <button class="btn btn-primary btn-lg" type="submit">Kontakt</button>
            </form>
            <form class="pocetna_dugme" action="{{route('pocetna')}}" method="get">
              @csrf
              <button class="btn btn-primary btn-lg" type="submit">Pocetna</button>
            </form>
          </div>
              @yield('naslov')
          <div class="logo_ime">
            <img class="logo" src="{{asset('images/sajt/ca_logo.png')}}" alt="LOGO">
          </div>
        </nav>
      </header>
      <main>
        <div class="wrapper">


        <img class="wood" src="{{asset('images/sajt/wood.png')}}" alt="wood">
          @yield('content')


        </div>
      </main>
      <footer>
          <div class="footer-container">
            <img class="footer_logo" src="{{asset('images/sajt/ca_logo.png')}}" alt="LOGO">
            <p class="kopirajt">Copyright © 2022 IWOOD, Inc.</p>
          </div>
      </footer>
    </div>
  </body>
</html>

<!--          <img class="instagram_logo" src="instagram.png" alt="instagram_logo">
          <a class="instagram" target="blank" href="https://www.instagram.com/_anes05/">Instagram</a>
          <img class="youtube_logo" src="youtube.png" alt="youtube_logo">
          <a class="youtube" target="_blank" href="https://www.youtube.com/c/HybridCalisthenics">Youtube</a>
          <img class="twiiter_logo" src="twitter.png" alt="twitter_logo">
          <a class="twitter" target="_blank" href="https://twitter.com/thewarowl">Twitter</a>
          <img class="chill_music_logo" src="music.png" alt="music">
          <a class="chill_music" target="blank" href="https://www.youtube.com/watch?v=8tBGMi-x5wY">Chill music</a> -->


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
