
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>eNasihat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    <style>

    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

  </head>

  <body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <div>
      @if (Route::has('login'))
      <ul class="nav nav-tabs ">
        <li class="nav-item">
        @auth
        <a class="nav-link fw-bold " aria-current="page" href="{{ url('/home') }}">Halaman Utama</a>
        </li>
       @else
       <li class="nav-item">
        <a class="nav-link fw-bold" href="{{ route('login') }}">Log Masuk</a>
       </li>

        @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link fw-bold" href="{{ route('register') }}">Mendaftar</a>
        </li>
        @endif
        @endauth
    </ul>
      @endif

    </div>
    <br>
    <h3 class="float-md-start mb-0">Aplikasi Web Responsif Penasihatan Individu Berasaskan Kaunseling dan Psikologi Islam (eNasihat)</h3>
  <header class="mb-auto">



  </header>

  <main class="px-3">
    <div class="text-center">
        <img  src="http://www.ukm.my/iceld2014/wp-content/uploads/2014/02/ukm.jpg" width="450"  >
    </div>
    <br>
    <h1>eNasihat</h1>
    <p class="lead">Aplikasi Web Responsif ini akan menyediakan perkhidmatan temujanji. Selain itu memudahkan para pengguna untuk mengenalpasti solusi bagi masalah atau kes yang dihadapi.</p>
    <p class="lead">

    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>eNasihat 2022</p>
  </footer>
</div>



  </body>
</html>
