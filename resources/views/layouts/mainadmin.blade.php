<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Ambulcance | {{ $title }}</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('css/1.png') }}"/>
    @stack('header_login')
    @stack('header_dashboard')
    @stack('header_dash')
</head>
<body>

    @include('partials.headeradmin')
    @include('partials.sidebar')

    {{-- container untuk setiap folder views --}}
    <div class="main">
        @yield('container')
    </div>


    @stack('footer_login')
    @stack('footer_dash')
    @stack('footer_dashboard')
</body>
</html>
