{{-- Main akan mengambil semua data dari folder views yang sudah dibuat --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Ambulcance | {{ $title }}</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('css/1.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
    <link href="https://fonts.googleapis.com/css? family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('header_home')
    <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> --}}
  </head>
  <body>
    {{-- include item navbar --}}
    @include('partials.navbar')

    {{-- container untuk setiap folder views --}}
    <div class="main">
      @yield('container')
    </div>

    {{-- script resource --}}
    <script src="https://cariambulan.com/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://cariambulan.com/assets/plugins/moment/moment.min.js"></script>
    {{-- <script src='https://cariambulan.com/assets/js/number-divider.min.js'></script> --}}
    {{-- <script src="https://cariambulan.com/assets/js/custom.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="https://kit.fontawesome.com/94ef7dcb87.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('java/main.js') }}"></script>
    @stack('footer_home')
    @stack('footer_script')
  </body>
</html>
