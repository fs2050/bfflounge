

<div>


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
                        <div class="post_options">

                            <div class="post_action">

                                <div class="dropdown">

                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditar">
                                            Editar('{{ $post->id }}')
                                        </a>


                                        <a href="#" class="dropdown-item"
                                            wire:click.prevent="destroyPost('{{ $post->id }}')">
                                            Excluir
                                        </a>

                                    </div> <!-- -->

                                </div> <!-- -->

                            </div> <!-- -->

                            <div class="post_date">
                                <span class="d-none d-lg-inline-block">Publicado em</span>
                                {{ date('d/m/Y'), $post->created_at }} às {{ date('H:i'), $post->created_at }}
                            </div>

                        </div>




                    </div>

                </div>
                <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atualizar Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="X">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="form-floating">
                            @if (empty($post->medias))
                                <textarea class="form-control" id="contentEditPost" style="height: 100px">{{ $post->content }}</textarea>
                            @else
                                <form wire:submit.prevent="editPost('{{ $post->id }}')">

                                    {{ $post->id }}


                                    <textarea class="form-control border border-5 border-danger" style="height: 100px" wire:model.defer="content"
                                        placeholder="Texto"></textarea>


                                    <img src="{{ url("http://192.168.0.105/storage/post/{$post->medias[0]->file}") }}"
                                        class="w-100" />



                                    <div class="mr-3 pt-2 text-center">
                                        <button type="submit" class="btn btn-danger ml-3">
                                            Editar Texto
                                        </button>
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">
                                            Fechar
                                        </a>
                                    </div>


                                </form>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <hr>




                @if (empty($post->medias))
                    <div class="post_info">
                        <p>{{ $post->content }}</p>
                    </div>
                @else
                    <div class="post_info">
                        <p>{{ $post->content }}</p>
                        <img src="{{ url("http://192.168.0.105/storage/post/{$post->medias[0]->file}") }}"
                            class="w-100" />
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

                        </div> <!-- -->

                        <div>

                            <i class="fas fa-dollar-sign mx-1 mx-lg-0"></i>

                            <span
                                class="d-none d-lg-inline-block mr-1 position-relative fw-500 btn-send-tip cursor-pointer"
                                style="top:-4px;" data-profile_id="{{ $post->profile_id }}">Send Tip</span>
                            <i class="las la-eye mx-1 mx-lg-2">
                                {{ $post->views }}
                            </i>

                            <i class="las la-file-video mx-1 mx-lg-2"></i>

                            <a href="#" wire:click.prevent="savePost('{{ $post->id }}')">
                                <i class="lar la-bookmark mx-1 mx-lg-2 ml-lg-4"></i>
                            </a>

                        </div> <!-- -->

                    </div> <!-- -->

                </div> <!-- -->

                <div class="post_comments">

                    <div class="post_comment">

                        <form wire:submit.prevent="commentPost('{{ $post->id }}')">

                            <input type="text" class="form-control" placeholder="Escreva um comentário"
                                wire:model="content">

                            <!-- <button type="submit" class="btn btn-primary">
                                Comentar
                                </button> -->

                        </form> <!-- -->

                        @foreach ( $post->interactions->comments as $comment )

                            <div class="comment_user">

                                <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>

                                <div class="comment_info">

                                    <div class="d-flex justify-content-between w-100">

                                        <div class="flex-1">

                                            <h5>{{ $comment->author->name }}</h5>

                                            <p class="bg-danger text-white" >{{ $comment->content }}</p>

                                            <div class="comment_reactions">

                                                <div class="comment_date">
                                                    {{ \Carbon\Carbon::make( $post->interactions->user->comments[0]->created_at )->format( 'd/m/Y H:i ' ) }}
                                                </div>

                                                <div class="comment_like mx-2 mx-lg-4">

                                                    @if ( empty($comment->interactions->user->reactions->likes ) )

                                                        <a href="#" wire:click.prevent="likeComment('{{ $comment->id }}')">
                                                            <i class="far fa-heart ml-2"></i>
                                                        </a>

                                                    @else

                                                        <a href="#" wire:click.prevent="unlikeComment('{{ $comment->interactions->user->reactions->likes[0]->id }}')">
                                                            <i class="fa-heart ml-2 fas"></i>
                                                        </a>

                                                    @endif

                                                    <span class="num">
                                                        {{ count( $comment->interactions->reactions->likes ) }}
                                                    </span>

                                                    <span class="d-none d-lg-inline-block">
                                                        curtidas
                                                    </span>

                                                </div> <!-- -->

                                                @if ( empty( $profile->profiles[0]->id ) )

                                                @else

                                                    @if ( $profile->profiles[0]->id == $post->profile_id )

                                                        <div class="comment_answer flex-1 text-right">
                                                            <span>Responder</span>
                                                        </div>

                                                    @endif

                                                @endif

                                            </div> <!-- -->

                                        </div> <!-- -->

                                        <div class="post_action">

                                            <div class="dropdown">

                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditar">
                                                        Editar('{{ $post->id }}')
                                                    </a>


                                                    <a href="#" class="dropdown-item"
                                                        wire:click.prevent="destroyPost('{{ $post->id }}')">
                                                        Excluir
                                                    </a>

                                                </div> <!-- -->

                                            </div> <!-- -->

                                        </div> <!-- -->

                                    </div> <!-- d-flex justify-content-between w-100 -->

                                    <form wire:submit.prevent="commentComment('{{ $comment->id }}')">

                                        <div class="new_comment">
                                            <div class="post_action">

                                                <div class="dropdown">

                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditar">
                                                            Editar('{{ $post->id }}')
                                                        </a>


                                                        <a href="#" class="dropdown-item"
                                                            wire:click.prevent="destroyPost('{{ $post->id }}')">
                                                            Excluir
                                                        </a>

                                                    </div> <!-- -->

                                                </div> <!-- -->

                                            </div> <!-- -->

                                            <div class="d-flex w-100 align-items-center">


                                                <div class="new_comment_photo" style="background-image:url(assets/images/users/01.png);"></div>

                                                <div class="new_comment_text flex-1 ">
                                                    <textarea placeholder="Comentar como {{ session('user')->name }}" wire:model.defer="contentCommentComment"></textarea>
                                                </div>

                                                <div class="new_comment_button">
                                                    <button type="submit" class="btn-primary">
                                                        Publicar
                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                    </form> <!-- -->

                                </div> <!-- comment_info -->

                            </div> <!-- -->

                            @foreach ( $comment->interactions->comments as $commentsComments )

                                <div class="comment_user">

                                    <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>

                                    <div class="comment_info">

                                        <div class="d-flex justify-content-between w-100">

                                            <div class="flex-1">

                                                <h5>{{ $commentsComments->author->name }}</h5>

                                                <p class="bg-warning">{{ $commentsComments->content }}</p>

                                                <div class="comment_reactions">

                                                    <div class="comment_like mx-2 mx-lg-4">

                                                        @if ( empty( $commentsComments->interactions->user->reactions->likes ))

                                                            <a href="#" wire:click.prevent="likeCommentComment('{{ $commentsComments->id }}')">
                                                                <i class="far fa-heart ml-2"></i>
                                                            </a>

                                                        @else

                                                            <a href="#" wire:click.prevent="unlikeCommentComment('{{ $commentsComments->interactions->user->reactions->likes[0]->id }}')">
                                                                <i class="fa-heart ml-2 fas"></i>
                                                            </a>

                                                        @endif

                                                            <span class="num">
                                                                {{ count( $commentsComments->interactions->reactions->likes ) }}
                                                            </span>

                                                            <span class="d-none d-lg-inline-block">
                                                                curtidas
                                                            </span>

                                                    </div> <!-- -->

                                                </div> <!-- -->

                                            </div> <!-- -->

                                            <div class="post_action">

                                                <div class="dropdown">

                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditar">
                                                            Editar('{{ $post->id }}')
                                                        </a>


                                                        <a href="#" class="dropdown-item"
                                                            wire:click.prevent="destroyPost('{{ $post->id }}')">
                                                            Excluir
                                                        </a>

                                                    </div> <!-- -->

                                                </div> <!-- -->

                                            </div> <!-- -->

                                        </div> <!-- d-flex justify-content-between w-100 -->

                                        <form wire:submit.prevent="commentComment('{{ $comment->id }}')">

                                            <div class="new_comment">

                                                <div class="d-flex w-100 align-items-center">

                                                    <div class="new_comment_photo" style="background-image:url(assets/images/users/01.png);"></div>

                                                    <div class="new_comment_text flex-1">
                                                        <textarea placeholder="Comentar como {{ session('user')->name }}" wire:model.defer="contentCommentComment"></textarea>
                                                    </div>

                                                    <div class="new_comment_button">
                                                        <button type="submit" class="btn-primary">
                                                            Publicar
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </form> <!-- -->

                                    </div> <!-- comment_info -->

                                </div> <!-- -->

                            @endforeach

                        @endforeach

                    </div> <!-- -->

                </div> <!-- -->

            </div>

        </div>

       <br>

    @empty

        <h1 class="text-center">
            Ops... Você ainda não segue ninguém!
        </h1>

    @endforelse

</div>
