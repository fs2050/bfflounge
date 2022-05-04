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


                        <form wire:submit.prevent="createPost">

                            <textarea class="mb-2" name="content" wire:model.defer="content"></textarea>

                            <div class="d-flex align-items-center justify-content-between">

                                <div>
                                    {{-- <input type="file" id="file" name="file" style="display:none"
                                        wire:model="medias"> --}}

                                    {{-- <a href="javascript:chooseFile()">
                                        <i class="lab la-youtube mr-1"></i>
                                    </a> --}}

                                    <input type="file" id="file" name="medias" style="display:none" wire:model="medias">

                                    <a href="javascript:chooseFile()">
                                        <i class="las la-camera mr-1"></i>
                                    </a>

                                    <i class="las la-comment"></i>

                                </div> <!-- -->


                                <div>

                                    <!--   <input type="button"  value="Cancelar"
                                    class="btn-primary"  onClick="Cancel()">  -->



                                    <input type="reset" value="Cancelar" class="btn-primary" onClick="Cancel()">

                                    <button class="btn-primary">Publicar</button>


                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

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

                        <div class="dropdown">

                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalEditar">
                                    Editar
                                </a>

                                <a href="#" class="dropdown-item" wire:click.prevent="destroyPost('{{ $post->id }}')">
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

            </div> <!-- -->



           <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atualizar Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="X">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <div class="form-floating">
                        @if ( empty( $post->medias ) )
                            <textarea class="form-control" id="contentEditPost" style="height: 100px">{{ $post->content }}</textarea>
                        @else
                        <form wire:submit.prevent="editPost('{{ $post->id }}')">

                            <textarea class="form-control border border-5 border-danger" style="height: 100px" wire:model.defer="content" placeholder="Texto"></textarea>


                            <img src="{{ url( env( 'BFF_API_STORAGE' ) . "{$post->medias[0]->file}" ) }}"
                            class="w-100" />



                                <div class="mr-3 pt-2 text-center">
                                <button type="submit" class="btn btn-danger ml-3" >
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

            @if( empty( $post->medias ) )
                <div class="post_info">
                    <p>{{ $post->content }}</p>
                </div>
            @else
                <div class="post_info">
                    <p>{{ $post->content }}</p>
                    <img src="{{ url( env( 'BFF_API_STORAGE' ) . "{$post->medias[0]->file}" ) }}"
                            class="w-100" />
                </div>
            @endif

            <div class="post_reactions">

                <div class="d-flex justify-content-between">

                    <div>

                        @if (empty($post->interactions->user->reactions->likes))
                            <a href="#" wire:click.prevent="likePost('{{ $post->id }}')">
                                <i class="far fa-heart mx-1 mx-lg-2 btn_curtir"></i>
                            </a>
                        @else
                            <a href="#"
                                wire:click.prevent="unlikePost('{{ $post->interactions->user->reactions->likes[0]->id }}')">
                                <i class="fa-heart ml-2 fas"></i>
                            </a>
                        @endif

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

                                        <p>{{ $comment->content }}</p>

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

                                    <div class="comment_action ml-4">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>

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

                        @foreach ( $comment->interactions->comments as $commentsComments )

                            <div class="comment_user">

                                <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>

                                <div class="comment_info">

                                    <div class="d-flex justify-content-between w-100">

                                        <div class="flex-1">

                                            <h5>{{ $commentsComments->author->name }}</h5>

                                            <p>{{ $commentsComments->content }}</p>

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

                                        <div class="comment_action ml-4">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>

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

</div> <!-- -->

<div class="container_right h-100">
    @include('livewire.components.profiles.home-suggestions')
</div> <!-- -->

@include('livewire.components.posts.send-tip-dialog')
@include('livewire.components.posts.select-card-dialog')
