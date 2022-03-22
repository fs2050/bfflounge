<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <title>{{ config( 'app.name', 'BFF Lounge - Perfil' ) }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="theme-color" content="#5F0F4E">
		<meta name="apple-mobile-web-app-status-bar-style" content="#5F0F4E">
		<meta name="msapplication-navbutton-color" content="#5F0F4E">
		<link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.png' ) }}" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset( 'assets/js/aos.js ' ) }}"></script>
		<script src="{{ asset( 'assets/js/functions.js ' ) }}"></script>

        <link href="{{ asset( 'assets/dist/hamburgers.css' ) }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/aos.css' ) }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset( 'assets/css/line-awesome.min.css' ) }}">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

		<!--BOOTSRAP-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset( 'assets/slider/dist/css/swiper.min.css' ) }}">
		<link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/default.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/profile.css' ) }}">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset( 'assets/js/jquery.mask.min.js ' ) }}"></script>

        @livewireStyles

    </head>

    <body>

        <main>

            {{ $slot }}

        </main>

        @livewireScripts

        <!-- Swiper JS -->
    <script type="text/javascript" src="{{ asset( 'assets/slider/dist/js/swiper.min.js' ) }}"></script>

    <!-- Initialize Swiper -->
    <script>
        $(function(){
            var swiper = new Swiper('.profile_plans .swiper-container', {
                autoHeight: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                spaceBetween: 15,
                loop: false,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            swiper.slideNext();

            var swiper = new Swiper('.profile_sugestions .swiper-container', {
                autoHeight: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                spaceBetween: 30,
                loop: false,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            swiper.slideNext();
        });
    </script>

    </body>

</html>
