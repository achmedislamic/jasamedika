


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title', 'Jasamedika')</title>


    <!-- Bootstrap core CSS -->
<link href="/css/app.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        padding-top: 5rem;
        }
        .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
        }
    </style>
    <!-- Custom styles for this template -->
    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">Halaman Utama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user()->is_admin)
      <li class="nav-item">
            <a class="nav-link" href="/kotas">Kota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kecamatans">Kecamatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelurahans">Kelurahan</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="/pasiens">Pasien</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">Pengguna</a>
        </li>
        
      @endif
      
      <li class="nav-item">
            <a class="nav-link" href="/pasiens">Pasien</a>
        </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
    <div class="starter-template">
        @yield('content')
    </div>
</main><!-- /.container -->
</body>
<footer>
    <script src="/js/app.js"></script>
    <script>
        $(document).ready(function(){
            $('#kota').change(function(){
                $.ajax({
                    type:'GET',
                    url: '/ajax/kecamatan/' + $(this).val(),
                    success:function(data) {
                        $('#kecamatan').html(data.html);
                    }
                });
            });
            
            $('#kecamatan').change(function(){
                $.ajax({
                    type:'GET',
                    url: '/ajax/kelurahan/' + $(this).val(),
                    success:function(data) {
                        $('#kelurahan').html(data.html);
                    }
                });
            });
            });
        </script>
</footer>
</html>
