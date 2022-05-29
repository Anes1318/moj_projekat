<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Anesov super vebsajt" content="Malo sutra">
    <title>Pocetna</title>
    <link rel="stylesheet" href="{{asset('css/pocetna.css')}}">
    <link rel="shortcut icon" href="#">

  </head>
  <body>
      <header>
        <nav>
          <div class="navigejsn">
            <a class="kontakt_link" href="kontakt.html"><button class="kontakt_dugme" type="button" name="button"></button></a>
            <a class="o_nama_link" href="o_nama.html"><button class="o_nama_dugme" type="button" name="button"></button></a>
            <a class="btn btn-primary pocetna_link" href="pocetna.html"><button class="pocetna_dugme" type="button" name="button"></button></a>
          </div>
          <div class="logo_ime">
            <h1 class="ime" >IWOOD</h1>
            <img class="logo" src="{{asset('images/ca_logo.png')}}" alt="LOGO">
          </div>
        </nav>
      </header>
      <main>
        <img class="wood" src="{{asset('images/wood.png')}}" alt="wood">
        @yield('content')
      </main>
      <footer>
          <div class="footer-container">
            <img class="footer_logo" src="{{asset('images/ca_logo.png')}}" alt="LOGO">
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
