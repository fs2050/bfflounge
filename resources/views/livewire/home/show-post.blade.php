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

                    <div class="post_action">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>

                    <div class="post_date">
                        <span class="d-none d-lg-inline-block">Publicado em</span>
                        {{ date( 'd/m/Y' ), $post->created_at }} às {{ date( 'H:i' ), $post->created_at }}
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
                    <img src="{{ url("http://192.168.0.105/storage/post/{$post->medias[0]->file}") }}" class="w-100" />
                </div>
            @endif

            <div class="post_reactions">

                <div class="d-flex justify-content-between">

                    <div>

                        @if ( empty( $post->interactions->user->reactions->likes ) )
                            <a href="#" wire:click.prevent="likePost('{{ $post->id }}')">
                                <i class="far fa-heart mx-1 mx-lg-2 btn_curtir"></i>
                            </a>
                        @else
                            <a href="#" wire:click.prevent="unlikePost('{{ $post->interactions->user->reactions->likes[0]->id }}')">
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

                </div> <!-- -->

            </div>

            <div class="post_comments">

                <div class="post_comment">

                    <form wire:submit.prevent="commentPost('{{ $post->id }}')">

                        <input type="text" class="form-control" placeholder="Escreva um comentário" wire:model="content">

                        <br>

                        <button type="submit" class="btn btn-primary">
                            Comentar
                        </button>

                    </form> <!-- -->

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
                                                {{ date( 'd/m/Y' ), $post->interactions->user->comments[0]->created_at }} às {{ date( 'H:i' ), $post->interactions->user->comments[0]->created_at }}
                                            </div>

                                            <div class="comment_like mx-2 mx-lg-4">

                                                @if ( empty( $comment->interactions->user->reactions ->likes ) )
                                                    <a href="#" wire:click.prevent="likeComment('{{ $comment->id }}')">
                                                        <i class="far fa-heart ml-2"></i>
                                                    </a>
                                                @else
                                                    <a href="#" wire:click.prevent="unlikeComment('{{ $comment->interactions->reactions->likes[0]->id }}')">
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

                                            <div class="comment_answer flex-1 text-right">
                                                <span>Responder</span>
                                            </div>

                                        </div> <!-- -->

                                    </div> <!-- -->

                                    <div class="comment_action ml-4">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>

                                </div> <!-- d-flex justify-content-between w-100 -->

                                <br> <hr>

                            @endforeach

                        </div> <!-- comment_info -->

                    </div> <!-- -->

                </div> <!-- -->

            </div> <!-- -->

            <div class="new_comment">

                <div class="d-flex w-100 align-items-center">

                    <div class="new_comment_user">
                        <div class="new_comment_photo" style="background-image:url(assets/images/users/01.png);"></div>
                    </div>

                    <form>

                        <div class="new_comment_text flex-1">
                            <textarea placeholder="Comentar como {{ session( 'user' )->name }}"></textarea>
                        </div>

                        <div class="new_comment_button">
                            <button type="submit" class="btn-primary">
                                Publicar
                            </button>
                        </div>

                    </form> <!-- -->

                </div>

            </div>

        </div>

    </div>

    @empty

        <h1 class="text-center">
            Ops... Você ainda não segue ninguém!
        </h1>

    @endforelse

</div>
