<!DOCTYPE html>

<html lang="{{ str_replace( '_', '-', app()->getLocale()) }}">

    <head>

        <title>{{ config( 'app.name', 'BFF Lounge' ) }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="theme-color" content="#5F0F4E">
		<meta name="apple-mobile-web-app-status-bar-style" content="#5F0F4E">
		<meta name="msapplication-navbutton-color" content="#5F0F4E">
		<link rel="shortcut icon" href="{{ asset( 'assets/images/favicon.png' ) }}" />

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
        <link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/main.css' ) }}">

        @livewireStyles

    </head>

    <body>

        <main>

            <div class="page_container">

                <div class="modal_default" data-modal="post">
                    <div class="d-flex w-100 h-100 position-relative align-items-center justify-content-center">
                        <div class="bg"></div>

                        <div class="container_form">
                            <div class="d-block d-lg-flex">
                                <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>
                                <form>
                                    <textarea class="mb-2"></textarea>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="lab la-youtube mr-1"></i>
                                            <i class="las la-camera mr-1"></i>
                                            <i class="las la-comment"></i>
                                        </div>
                                        <div>
                                            <button>Publicar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="menu_right">
                    <ul>
                        <li><a href="{{ route( 'chargebacks.index' ) }}"><i class="las la-list"></i> Lista de Estornos</a></li>
                        <li><a href="{{ route( 'indications.index' ) }}"><i class="las la-user-friends"></i> Programa de Indicação</a></li>
                        <li><a href="earnings.html"><i class="las la-hand-holding-usd"></i> Estimativa de Ganhos</a></li>
                        <li><a href="{{ route( 'bank.index' ) }}"><i class="las la-dollar-sign"></i> Banco</a></li>
                        <li class="pb-5"><a href="#"><i class="las la-box"></i> Editar meus planos e pacotes</a></li>

                        <li class="mt-5 pt-5"><a href="{{ route( 'settings.index' ) }}"><i class="las la-cog"></i> Configurações</a></li>
                        <li class="mt-5"><a href="{{ route( 'support.index' ) }}"><i class="lar la-question-circle"></i> Ajuda e Suporte</a></li>
                        <li><a href="#"><i class="las la-globe"></i> Idioma</a></li>
                    </ul>
                </div>

                <div class="container_scroll">
                    <div class="menu_background"></div>

                    <div class="btn_menu_right d-none d-lg-block">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>

                    <div class="menu_mobile bg-white d-flex d-lg-none py-2 align-items-center justify-content-between">
                        <i class="fas fa-ellipsis-h btn_menu"></i>

                        <div class="logo">
                            <a href="{{ route( 'home.index' ) }}"><img src="{{ asset( 'assets/images/logo.png' ) }}" alt="BFF Lounge" class="mw-100" /></a>
                        </div>
                        <!--<div class="btn_new">
                            <i class="fas fa-plus-square"></i>
                        </div>-->

                        <div class="btn_menu_right d-block d-lg-none">
                            <div class="hamburger hamburger--slider">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page d-block d-lg-flex h-lg-100 justify-content-between">

                        <div class="container_left h-100 bg-white p-5">

                            <div class="logo">
                                <a href="{{ route( 'home.index' ) }}">
                                    <img src="{{ asset( 'assets/images/logo.png' ) }}" alt="BFF Lounge" class="mw-100" />
                                </a>
                            </div>

                            <button class="w-100 btn_new_post"><i class="fas fa-plus"></i> Nova Publicação</button>

                            <ul class="menu">
                                <li><a href="{{ route( 'home.index' ) }}"><i class="las la-home"></i> Home</a></li>
                                <li><a href="{{ route( 'home.index' ) }}"><i class="las la-newspaper"></i> Publicações</a></li>
                                <li><a href="chat.html"><i class="far fa-paper-plane"></i> Mensagens</a></li>
                                <li><a href="#"><i class="far fa-bell"></i> Notificações</a></li>
                                <li><a href="{{ route( 'profile.index' ) }}"><i class="far fa-user"></i> Perfil</a></li>
                                <li><a href="{{ route( 'cards.index' ) }}"><i class="las la-credit-card"></i> Meus Cartões</a></li>
                                <li><a href="{{ route( 'bank.index' ) }}"><i class="las la-dollar-sign"></i> Banco</a></li>
                                <li><a href="#"><i class="lar la-heart"></i> Curtidos</a></li>
                                <li><a href="#"><i class="las la-bookmark"></i> Salvos</a></li>
                                <li class="mt-5 active"><a href="{{ route( 'settings.index' ) }}"><i class="las la-cog"></i> Configurações</a></li>
                                <li class="mt-5"><a href="{{ route( 'support.index' ) }}"><i class="las la-question-circle"></i> Ajuda e Suporte</a></li>
                                <li><a href="#"><i class="las la-globe"></i> Idioma</a></li>
                            </ul>

                            <ul class="small_menu mt-5">
                                <li><a href="#">Política de privacidade</a></li>
                                <li><a href="#">Termos do Serviço</a></li>
                                <li><a href="#">Política de Cookies</a></li>
                            </ul>

                        </div>

                        {{ $slot }}

                    </div> <!-- -->

                </div> <!-- -->

            </div> <!-- -->

        </main> <!-- -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset( 'assets/js/aos.js' ) }}"></script>
		<script src="{{ asset( 'assets/js/functions.js' ) }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset( 'assets/js/jquery.mask.min.js' ) }}"></script>

        @livewireScripts

    </body>

</html>
