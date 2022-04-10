<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <title>{{ config( 'app.name', 'BFF Lounge - Login' ) }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="theme-color" content="#5F0F4E">
		<meta name="apple-mobile-web-app-status-bar-style" content="#5F0F4E">
		<meta name="msapplication-navbutton-color" content="#5F0F4E">

		<link rel="shortcut icon" href="{{ url( 'assets/images/favicon.png' ) }} " />

        <link rel="stylesheet" href="{{ url( 'assets/dist/hamburgers.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ url( 'assets/css/aos.css' ) }}">

		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap">

        <link rel="stylesheet" type="text/css" href="{{ url( 'assets/css/line-awesome.min.css' ) }}">

		<!--BOOTSTRAP-->
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{ url( 'assets/slider/dist/css/swiper.min.css' ) }}">
		<link rel="stylesheet" type="text/css" href="{{ url( 'assets/css/default.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ url( 'assets/css/login.css' ) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @livewireStyles

    </head>

    <body>

        <main>

            {{ $slot }}

        </main>

        @livewireScripts

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{ url( 'assets/js/aos.js' ) }}"></script>
		<script type="text/javascript" src="{{ url( 'assets/js/functions.js' ) }}"></script>
        @include('livewire.layouts.setup-jquery-ajax')

        <script type="text/javascript" src="{{ asset( 'assets/js/aos.js' ) }}"></script>
		<script type="text/javascript" src="{{ asset( 'assets/js/functions.js' ) }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{ url( 'assets/js/jquery.mask.min.js' ) }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url( 'assets/css/app.css' ) }}">

        <!-- Scripts -->
        <script src="{{ url( 'assets/js/app.js' ) }}" defer></script>

    </body>

</html>
