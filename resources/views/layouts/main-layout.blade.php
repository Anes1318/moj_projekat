<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Anesov super vebsajt" content="Malo sutra">


    <!-- links -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield('links')
  </head>
  <body>
    <div id="page-container">
      <header>
        <nav>

          <div class="navigejsn">
            <div class="dugmad">
              @if(Auth::check())
              <form class="create_dugme" action="{{route('products.create')}}" method="get">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">Napravi artikal</button>
              </form>
              <form class="svi_artikli_dugme" action="{{route('artikli')}}" method="get">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">Moji artikli</button>
              </form>
              <form class="svi_artikli_dugme" action="{{route('viewkorpa')}}" method="get">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">Korpa</button>
              </form>
              @else
              <form class="create_dugme" action="{{route('login')}}" method="get">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">Login</button>
              </form>
              @endif
              <form class="pocetna_dugme" action="{{route('pocetna')}}" method="get">
                @csrf
                <button class="btn btn-primary btn-lg" type="submit">Pocetna</button>
              </form>

            </div>

          </div>

          <div class="logo_ime">
            <a href="{{route('pocetna')}}"><img class="logo" src="{{asset('images/sajt/logo.png')}}" alt="LOGO"></a>
          </div>
        </nav>
      </header>
      <main>
        <div class="content-container">

          @yield('content')
        </div>
      </main>

      <footer>
          <div class="footer-container">
            <img class="footer_logo" src="{{asset('images/sajt/logo.png')}}" alt="LOGO">


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
