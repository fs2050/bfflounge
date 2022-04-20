<div class="container_center h-100">
    <form class="form_search mt-4 ">
        <div class="position-relative">
            <input type="text" name="filtrar" placeholder="Pesquisa por nome de usuário, hashtag ou publicação"
                class="w-100" />
            <button class="btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
        </div>
    </form>

    <div>
        <div class="modal_default" data-modal="post">
            <div class="d-flex w-100 h-100 position-relative align-items-center justify-content-center">
                <div class="bg"></div>

                <div class="container_form">
                    <div class="d-block d-lg-flex">
                        <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>


                        <form wire:submit.prevent="addPost" >
                            <textarea class="mb-2" name="content" wire:model.defer="content"></textarea>
                            <div class="d-flex align-items-center justify-content-between">

                                <div>
                                    <input id="file" name="file" type="file" style="display:none">
                                    <a href="javascript:chooseFile()"><i class="lab la-youtube mr-1"></i></a>
                                    <input id="file" name="file" type="file" style="display:none">
                                    <a href="javascript:chooseFile()"> <i class="las la-camera mr-1"></i></a>

                                    <i class="las la-comment"></i>

                                </div>


                                <div>

                                 <!--   <input type="button"  value="Cancelar"
                                    class="btn-primary"  onClick="Cancel()">  -->



                                    <input type="reset"  value="Cancelar"
                                    class="btn-primary" onClick="Cancel()">

                                    <button class="btn-primary">Publicar</button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Posts Show -->
    @forelse( $posts as $post )

    <div class="timeline">

        <div class="post">

            <div class="post_user">

                <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>

                <div class="user_name">
                    <h5>{{ $post->author->name }}</h5>
                    <span><a href="#">{{ $post->profile->slug }}</a></span>
                </div>

                <div class="post_options">

                    <div class="post_action">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>

                    <div class="post_date">
                        <span class="d-none d-lg-inline-block">Publicado</span>
                        {{ date( 'd/m/Y' ), $post->created_at }}
                    </div>

                </div>

            </div>

            @if( empty( $post->medias ) )
                <div class="post_info">
                    <p>{{ $post->content }}</p>
                </div>
            @else
                <div class="post_info">
                    <p>{{ $post->content }}</p>
                    <img src="{{ url("http://192.168.0.3/storage/post/{$post->medias[0]->file}") }}" class="w-100" />
                </div>
            @endif

            <div class="post_reactions">

                <div class="d-flex justify-content-between">

                    <div>

                        @if ( empty( $post->interactions->reactions->likes ) )
                            <a href="#" wire:click.prevent="like({{ $post->id }})">
                                <i class="far fa-heart mx-1 mx-lg-2 btn_curtir"></i>
                            </a>
                        @else
                            <a href="#" wire:click.prevent="unlike({{ $post->id }})">
                                <i class="fa-heart ml-2 fas"></i>
                            </a>
                        @endif

                        <span class="post_comment_icon">
                            <span class="num">{{ count( $post->interactions->comments ) }}</span>
                            <i class="las la-sms mx-1 mx-lg-2"></i>
                        </span>

                        <i class="far fa-paper-plane mx-1 mx-lg-2"></i>

                    </div>

                    <div>
                        <i class="fas fa-dollar-sign mx-1 mx-lg-0"></i>
                        <span class="d-none d-lg-inline-block mr-1 position-relative fw-500 btn-send-tip cursor-pointer" style="top:-4px;" data-profile_id="{{$post->profile_id}}">Send Tip</span>
                        <i class="las la-eye mx-1 mx-lg-2">
                            {{ $post->views }}
                        </i>
                        <i class="las la-file-video mx-1 mx-lg-2"></i>

                        <i class="lar la-bookmark mx-1 mx-lg-2 ml-lg-4"></i>
                    </div>

                </div>

            </div>

            <div class="post_comments">

                <div class="post_comment">

                    <form wire:click.prevent="commentPost">

                        <input type="text" class="form-control" placeholder="Escreva um comentário" wire:model="content">

                        <button type="submit" class="btn btn-primary">
                            Comentar
                        </button>

                    </form>

                    <div class="comment_user">

                        <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>

                        <div class="comment_info">

                            @foreach ( $post->interactions->comments as $comment )

                                <div class="d-flex justify-content-between w-100">

                                    <div class="flex-1">

                                        <h5>{{ $comment->author->name }}</h5>

                                        <p>{{ $comment->content }}</p>

                                        <div class="comment_reactions">

                                            <div class="comment_date">
                                                14min
                                            </div>

                                            <div class="comment_like mx-2 mx-lg-4">
                                                <i class="far fa-heart ml-2"></i> <span class="num">{{ count( $comment->interactions->reactions->likes ) }}</span> <span
                                                    class="d-none d-lg-inline-block">curtidas</span>
                                            </div>

                                            <div class="comment_answer flex-1 text-right">
                                                <span>Responder</span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="comment_action ml-4">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>

                                </div> <!-- d-flex justify-content-between w-100 -->

                                <br> <hr>

                            @endforeach

                        </div> <!-- comment_info -->

                    </div>

                </div>

            </div>

            <div class="new_comment">
                <div class="d-flex w-100 align-items-center">
                    <div class="new_comment_user">
                        <div class="new_comment_photo" style="background-image:url(assets/images/users/01.png);"></div>
                    </div>
                    <div class="new_comment_text flex-1">
                        <textarea placeholder="Comentar como Júlia Padilha..."></textarea>
                    </div>

                    <div class="new_comment_button">
                        <button class="btn-primary">Publicar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @empty
        <h1 class="text-center">
            Ops... Você ainda não segue ninguém!
        </h1>
    @endforelse
    <!-- Fim Posts Show -->
</div>

<div class="container_right h-100">
    <h4 class="mb-4">Sugestões para você:</h4>

    <div class="cards_sugestion mb-5">
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/01.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="hover btn-primary">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/03.png);">
                        </div>
                        <div class="card_sugestion_name">
                            <h5>Juliana Bordon</h5>
                            <span>@julianabd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/02.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="hover btn-primary">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/04.png);">
                        </div>
                        <div class="card_sugestion_name">
                            <h5>Paula Cassy</h5>
                            <span>@paulacass</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/03.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="hover btn-primary">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/05.png);">
                        </div>
                        <div class="card_sugestion_name">
                            <h5>Katarina Mendez</h5>
                            <span>@julianabd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/01.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="hover btn-primary">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/03.png);">
                        </div>
                        <div class="card_sugestion_name">
                            <h5>Juliana Bordon</h5>
                            <span>@julianabd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.components.posts.send-tip-dialog')
@include('livewire.components.posts.select-card-dialog')
