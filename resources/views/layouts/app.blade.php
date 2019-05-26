<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#img1').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#profile_image").change(function() {
      readURL(this);
    });

    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color: purple;">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">
                <img src="/images/amikom.png" width="70px" height="70px">
            </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">

                    Sistem Informasi Pengaduan
                    <br>
                    Universitas Amikom Yogyakarta
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: yellow;">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto" >
                
                <li class="nav-item">
                  <a class="nav-link" href="/pengaduan" style="color:black">Input Laporan</a>
                </li>
                
                <li class="nav-item active">
                  <a class="nav-link" href="/home" style="color:black">Lihat Laporan <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:black" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                       </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                       </form>
                                
                            </li>
              </ul>
            </div>
          </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>






    <!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small " style="background-color: purple">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white">© 2018 Copyright:
    <a href="#" style="color: white"> Amikom</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
