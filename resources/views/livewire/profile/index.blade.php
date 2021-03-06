<div class="page_container">
    @include('livewire.components.posts.new-post-dialog')

    <div class="menu_right">
        <ul>
            <li><a href="{{ route( 'chargebacks.index' ) }}"><i class="las la-list"></i> Lista de Estornos</a></li>
            <li><a href="{{ route( 'indications.index' ) }}"><i class="las la-user-friends"></i> Programa de Indicação</a></li>
            <li><a href="{{ route( 'earnings.index' ) }}"><i class="las la-hand-holding-usd"></i> Estimativa de Ganhos</a></li>
            <li><a href="{{ route( 'bank.index' ) }}"><i class="las la-dollar-sign"></i> Banco</a></li>
            <li class="pb-5"><a href="#"><i class="las la-box"></i> Editar meus planos e pacotes</a></li>

            <li class="mt-5 pt-5"><a href="{{ route( 'settings.index' ) }}"><i class="las la-cog"></i> Configurações</a></li>
            <li class="mt-5"><a href="{{ route( 'support.index' ) }}"><i class="lar la-question-circle"></i> Ajuda e Suporte</a></li>
            <li><a href="#"><i class="las la-globe"></i> Idioma</a></li>
        </ul>
    </div>

    <div class="container_scroll">
        <div class="header py-4 bg-white">
            <div class="container">
                <div class="d-block d-lg-flex justify-content-between">
                    <div class="logo mb-4 mb-lg-0">
                        <a href="{{ route( 'home.index' ) }}">
                            <img src="{{ asset( 'assets/images/logo.png' ) }}" alt="BFF Lounge" class="mw-100" />
                        </a>
                    </div>

                    <div class="d-flex align-items-center">
                        <button class="btn-primary w-100 btn_new_post"><i class="fas fa-plus"></i> Nova Publicação</button>




                        <div class="header_actions">
                            <i class="fas fa-newspaper"></i>
                            <i class="far fa-bell"></i>
                            <i class="far fa-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn_menu_right">
                <div class="hamburger hamburger--slider">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal_default" data-modal="post" >

            <div class="d-flex w-100 h-100 position-relative align-items-center justify-content-center">

                <div class="bg"></div>

                <div class="container_form">

                    <div class="d-block d-lg-flex">

                        <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>

                        <form wire:submit.prevent="createPost">

                            <textarea class="mb-2" name="content" wire:model.defer="content"></textarea>

                            <div class="d-flex align-items-center justify-content-between">

                                <div>


                                    <input type="file" id="file" style="display:none" wire:model="medias">

                                    <a href="javascript:chooseFile()">
                                        <i class="las la-camera mr-1"></i>
                                    </a>

                                    <input type="file" id="file" style="display:none" wire:model="medias">

                                    <a href="javascript:chooseFile()">
                                        <i class="lab la-youtube mr-1"></i>
                                    </a>



                                </div> <!-- -->

                                <div>

                                    <input type="reset" value="Cancelar" class="btn btn-primary" onClick="Cancel()">

                                    <button type="submit" class="btn-primary">
                                        Publicar
                                    </button>

                                </div> <!-- -->

                            </div> <!-- -->

                        </form> <!-- -->

                    </div> <!-- -->

                </div> <!-- -->

            </div> <!-- -->

        </div> <!-- -->

        <main>
            <div class="container">
                <form class="form_search mt-4 mb-4">
                    <div class="position-relative d-block d-lg-flex align-items-center">
                        <input type="text" name="filtrar" placeholder="Pesquisa por nome de usuário, hashtag ou publicação" class="flex-1 mr-0 mr-lg-3" />
                        <button class="btn-primary nowrap"><i class="fas fa-search"></i> Buscar</button>
                    </div>
                </form>

                <div class="d-block d-lg-flex w-100">
                    <div class="profile_info flex-1 mb-4 mb-lg-0">
                        <div
                            class="profile_cover p-4"
                            @if(isset($profile) && !is_null($profile['cover']))
                                style="background-image:url({{ env('BFF_API_STORAGE') }}/profile/{{$profile['cover']}});"
                            @else
                                style="background-image:url(assets/images/covers/04.png);"
                            @endif
                        >
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button class="btn-primary hover"><i class="fas fa-plus"></i> Adicionar como amigo</button>
                                </div>
                            </div>
                        </div>
                        <div class="profile_menu px-5 pl-lg-5 py-4 pr-lg-4">
                            <div class="d-block d-lg-flex align-items-center text-center text-lg-left">
                                <div
                                    class="profile_photo"
                                    @if(isset($profile) && !is_null($profile['avatar']))
                                        style="background-image:url({{ env('BFF_API_STORAGE') }}/profile/{{$profile['avatar']}});"
                                    @else
                                        style="background-image:url(assets/images/users/01.png);"
                                    @endif
                                ></div>
                                <div class="profile_name ml-0 ml-lg-3 flex-1">
                                    <h5>{{$profile['name']}}</h5>
                                    <span><a href="#">{{ '@'.$profile['slug'] }}</a></span>
                                </div>
                                <div class="profile_numbers d-flex justify-content-center mt-4 mt-lg-0">
                                    <div>
                                        <i class="lar la-heart"></i><br>
                                        <span>{{$profile['likes'] ?? 0}}</span>
                                    </div>
                                    <div>
                                        <i class="las la-eye"></i><br>
                                        <span>{{$profile['views'] ?? 0}}</span>
                                    </div>
                                    <div>
                                        <i class="las la-crown"></i><br>
                                        <span>{{$profile['subscribers'] ?? 0}}</span>
                                    </div>
                                    <div>
                                        <i class="las la-dollar-sign"></i><br>
                                        <span>{{$profile['income'] ?? 0}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile_nav py-3 px-5">
                            <ul class="d-block d-lg-flex m-0 p-0 justify-content-between text-center">
                                <li class="mb-2 mb-lg-0"><a href="#">Fotos</a></li>
                                <li class="mb-2 mb-lg-0"><a href="#">Vídeos</a></li>
                                <li class="mb-2 mb-lg-0"><a href="#">Minhas metas</a></li>
                                <li class="mb-2 mb-lg-0"><a href="#">Itens Exclusivos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile_friends bg-white p-3 ml-0 ml-lg-3">
                        <div class="d-flex w-100 px-2 align-items-center justify-content-between">
                            <h6><i class="las la-user-friends mr-2"></i>Amigos</h6>
                            <span>1059</span>
                        </div>

                        <ul class="row text-center">
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/06.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/01.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/05.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/03.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/01.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/06.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/03.png);"></div>
                            </li>
                            <li class="col-4 col-lg-6">
                                <div class="friend_photo" style="background-image:url(assets/images/users/05.png);"></div>
                            </li>
                        </ul>

                        <div class="btn_more px-1 py-3 bg-white position-relative">
                            <button class="btn-primary w-100">Ver todos</button>
                        </div>
                    </div>
                </div>

                <div class="profile_about my-5">
                    <h3>Sobre mim</h3>
                    <p>{{$profile['bio']}}</p>
                </div>

                <div class="profile_price bg-white py-4 py-lg-5 px-3 px-lg-5">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <h4>Experimente Grátis</h4>
                                <p>Acesso completo por 30 dias*</p>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn-primary mb-3 w-100 d-flex justify-content-between">
                                    <span>Assinar agora</span>
                                    <span>Grátis por 30 dias</span>
                                </button>
                                <button class="btn-primary mb-3 w-100 d-flex justify-content-between">
                                    <span>3 meses</span>
                                    <span>10% off - 186,30</span>
                                </button>
                                <button class="btn-primary w-100 d-flex justify-content-between">
                                    <span>6 meses</span>
                                    <span>10% off - 372,60</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5 text-center text-lg-right">
                            <button class="btn-primary"><i class="las la-plus"></i> Adicionar novo</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile_plans py-5 mt-5 px-4 px-lg-0">
                <div class="container">
                    <h4>Tenha acesso à conteúdo exclusivo</h4>
                    <p>Assine agora por 1 mês por apenas:</p>
                    <span class="price mb-4 d-block">R$ 90,00</span>

                    <hr />

                    <h4 class="mt-4 mb-5">Combos e planos:</h4>
                </div>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="profile_plan p-5" style="background-image:url(assets/images/plano_01.png);">
                                <div>
                                    <h5>Assine 1 mês com (10% de desconto)</h5>
                                    <span>Pague somente R$ 81,00 por mês*</span>
                                    <button class="btn-primary">Assine agora</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="profile_plan p-5" style="background-image:url(assets/images/plano_02.png);">
                                <div>
                                    <h5>Combo de 3 meses (10% de desconto)</h5>
                                    <span>Pague somente R$ 186,30 no total por 3 meses!</span>
                                    <button class="btn-primary">Assine agora</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="profile_plan p-5" style="background-image:url(assets/images/plano_03.png);">
                                <div>
                                    <h5>Combo de 6 meses (10% de desconto)</h5>
                                    <span>Pague somente R$ 372,60 no total por 3 meses!</span>
                                    <button class="btn-primary">Assine agora</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="profile_plan p-5" style="background-image:url(assets/images/plano_04.png);">
                                <div>
                                    <h5>Combo de anual (10% de desconto)</h5>
                                    <span>Pague somente R$ 972,60 no total por 12 meses!</span>
                                    <button class="btn-primary">Assine agora</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile_share bg-white">
                <div class="container py-4">
                    <div class="d-block d-lg-flex text-center text-lg-left justify-content-between">
                        <div>
                            <span class="border-right"><i class="las la-image"></i> Fotos</span>
                            <span><i class="las la-video"></i> Vídeos</span>
                        </div>
                        <div class="mt-3 mt-lg-0">
                            <span><i class="las la-share-alt"></i> Compartilhar perfil</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile_posts py-5">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <h3 class="mb-0">Publicações</h3>
                        <div class="btn_view">
                            <i class="fas fa-th active"></i>
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                </div>
                <div class="container_big">
                    <div class="row">
                        <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="profile_post">
                                <img src="{{ asset( 'assets/images/posts/03' ) }}.png" class="w-100" />
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="profile_post video">
                                <img src="{{ asset( 'assets/images/posts/04' ) }}.png" class="w-100" />
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="profile_post video">
                                <img src="{{ asset( 'assets/images/posts/05' ) }}.png" class="w-100" />
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="profile_post">
                                <img src="{{ asset( 'assets/images/posts/06' ) }}.png" class="w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 mb-4 my-lg-5">
                        <button class="btn-primary">Ver mais</button>
                    </div>
                </div>
            </div>

            <div class="profile_sugestions py-5 bg-white">
                @include('livewire.components.profiles.profile-suggestions')
            </div>

            <div class="footer_menu py-4 bg-white">
                <ul class="d-block d-lg-flex justify-content-center text-center pl-0">
                    <li class="mx-5 mb-3 mb-lg-0"><a href="#">Política de Privacidade</a></li>
                    <li class="mx-5 mb-3 mb-lg-0"><a href="#">Termos do Serviço</a></li>
                    <li class="mx-5 mb-3 mb-lg-0"><a href="#">Política de Cookies</a></li>
                </ul>
            </div>
        </main>
    </div>
</div>
