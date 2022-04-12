<div class="container_center h-100">
    <form class="form_search mt-4">
        <div class="position-relative">
            <input type="text" name="filtrar" placeholder="Pesquisa por nome de usuário, hashtag ou publicação" class="w-100" />
            <button><i class="fas fa-search"></i> Buscar</button>
        </div>
    </form>

    <div class="timeline">
        <div class="post">
            <div class="post_user">
                <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>
                <div class="user_name">
                    <h5>Jéssica Padilha</h5>
            <span><a href="#">@jessypadilha22</a></span>
                </div>
                <div class="post_options">
                    <div class="post_action">
                        <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditar" >Alguma ação</a>
                            <a class="dropdown-item" href="#">Outra ação</a>
                            <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                          </div>

                    </div>
                    </div>
                    <div class="post_date">
                        <span class="d-none d-lg-inline-block">Publicado</span> há 2 dias
                    </div>
                </div>
            </div>
            <!-- Modal Editar-->
                        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                incluir aqui os dados do post....
                              </div>
                            </div>
                          </div>
                        </div>
            <div class="post_info">
                <p>Amo isso! Me deixa louca e vc? bla bla bla bla bla</p>
                <img src="assets/images/posts/01.png" class="w-100" />
            </div>
            <div class="post_reactions">
                <div class="d-flex justify-content-between">
                    <div>
                        <i class="far fa-heart mx-1 mx-lg-2 btn_curtir"></i>
                        <span class="post_comment_icon">
                            <span class="num">99+</span>
                            <i class="las la-sms mx-1 mx-lg-2"></i>
                        </span>
                        <i class="far fa-paper-plane mx-1 mx-lg-2"></i>
                    </div>
                    <div>
                        <a href="#" data-toggle="modal" data-target="#modalExemplo"><i class="fas fa-dollar-sign mx-1 mx-lg-0"></i>
                        <span class="d-none d-lg-inline-block mr-1 position-relative fw-500" style="top:-4px;">Send Tip</span></a>
                        <i class="las la-eye mx-1 mx-lg-2"></i>
                        <i class="las la-file-video mx-1 mx-lg-2"></i>

                        <i class="lar la-bookmark mx-1 mx-lg-2 ml-lg-4"></i>


                        <!-- Modal -->
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Obrigado pelo presente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div id="myDIV" style="text-align: center;"><button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                                  5
                                </button><button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                                  10
                                </button><button data-v-70b0291a="" class="btn btn-item mr-2 ml-2 active">
                                  15
                                </button><button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                                  ?
                                </button>
                                </div>

                                <div data-v-70b0291a="" style="padding-left: 20px; padding-right: 20px;"><div data-v-70b0291a="" class="v-input v-textarea v-textarea--auto-grow v-textarea--no-resize theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined v-text-field--placeholder"><div class="v-input__control"><div class="v-input__slot"><fieldset aria-hidden="true"><legend style="width: 0px;"><span>​</span></legend></fieldset><div class="v-text-field__slot"><textarea id="input-617" placeholder="Mensagem (opcional)" rows="1" style="height: 32px;"></textarea></div></div><div class="v-text-field__details"><div class="v-messages theme--light"><div class="v-messages__wrapper"></div></div></div></div></div> <button class="btn btn-primary mt-5"  data-toggle="modal" data-target="#modalCartao">Confirmar</button></div>

                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="modal fade" id="modalCartao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Escolha a forma de pagamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4 >Saldo atual R$ 0,00</h4>
                                <h5 class="pt-3" style="color: rgb(184, 184, 184); margin-top: 10px;">Valores em Reais (BRL)</h5>

                                <div class="row d-flex justify-content-center "><button type="button" class="btn btn-item active">15*</button></div>

                                <h4 class="pt-5" style="color: black; font-style: italic;">Métodos</h4>
                                <div id="myDIV" style="text-align: center;">
                                    <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                                  Cartao de credito</button>
                                  <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                                  PIX</button>
                                  <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2 active">
                                  Pic Pay
                              </button>
                                </div>
                                <div data-v-58e484df="" class="row" style=""><div data-v-58e484df="" class="text-right col" style="font-size: 11px;">Limite Diário R$&nbsp;0,00/500.00</div> <div data-v-58e484df="" class="col" style="font-size: 11px;">Limite Mensal R$&nbsp;0,00/500.00</div></div>

                                <div data-v-58e484df="" class="row title_value_wallet pt-5">
                                    <h4 data-v-58e484df="">Seus Cartões</h4>
                                    <div data-v-58e484df="" class="col col_md" style="padding: 0px;"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDados" style="float: right;">Novo</button></div>
                                </div>


                                <button class="btn btn-primary btn-lg mt-5">Confirmar</button>



                                <!-- Modal Form Cartão -->
                        <div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dados para pagamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="padding">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Credit Card</strong>
                                                    <small>enter your card details</small>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Nome</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Digite seu nome">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">CPF</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Digite seu CPF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Data de Nascimento</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Digite sua data de Nascimento">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Email</label>
                                                                <input class="form-control" id="name" type="email" placeholder="Digite seu email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Telefone</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Digite seu seu telefone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Endereço</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Digite seu endereço">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>Estamos em conformidade com os <a href="https://pt.pcisecuritystandards.org/index.php" target="_blank">Padrões de Segurança de Dados da Indústria de Cartões de Pagamento.</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                                    Selecione para confirmar que você tem pelo menos 18 anos ou a maioridade legal no lugar em que você reside
                                                                  </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="ccnumber">Número do Cartão de Crédito</label>
                                                                <div class="input-group">
                                                                    <input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="mdi mdi-credit-card"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Mês</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Ano</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input class="form-control" id="cvv" type="text" placeholder="123">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-sm btn-success float-right" type="submit">
                                                        <i class="mdi mdi-gamepad-circle"></i> Continuar</button>
                                                    <button class="btn btn-sm btn-danger" type="reset">
                                                        <i class="mdi mdi-lock-reset"></i> Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>



                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post_comments">
                <div class="post_comment">
                    <div class="comment_user">
                        <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>
                        <div class="comment_info">
                            <div class="d-flex justify-content-between w-100">
                                <div class="flex-1">
                                    <h5>Adamastor20</h5>
                                    <p>Nossa que dlc! 🥰🥰🔥</p>

                                    <div class="comment_reactions">
                                        <div class="comment_date">
                                            14min
                                        </div>
                                        <div class="comment_like mx-2 mx-lg-4">
                                            <i class="far fa-heart ml-2"></i> <span class="num">73</span> <span class="d-none d-lg-inline-block">curtidas</span>
                                        </div>
                                        <div class="comment_answer flex-1 text-right">
                                            <span>Responder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_action ml-4">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post_comment">
                    <div class="comment_user">
                        <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>
                        <div class="comment_info">
                            <div class="d-flex justify-content-between w-100">
                                <div class="flex-1">
                                    <h5>Adamastor20</h5>
                                    <p>Nossa que dlc! 🥰🥰🔥</p>

                                    <div class="comment_reactions">
                                        <div class="comment_date">
                                            14min
                                        </div>
                                        <div class="comment_like mx-2 mx-lg-4">
                                            <i class="far fa-heart ml-2"></i> <span class="num">73</span> <span class="d-none d-lg-inline-block">curtidas</span>
                                        </div>
                                        <div class="comment_answer flex-1 text-right">
                                            <span>Responder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_action ml-4">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                        </div>
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
                        <button>Publicar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="post">
            <div class="post_user">
                <div class="user_photo" style="background-image:url(assets/images/users/06.png);"></div>
                <div class="user_name">
                    <h5>Juliana Alves</h5>
                    <span><a href="#">@jessypadilha22</a></span>
                </div>
                <div class="post_options">
                    <div class="post_action">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="post_date">
                        <span class="d-none d-lg-inline-block">Publicado</span> há 2 dias
                    </div>
                </div>
            </div>
            <div class="post_info">
                <p>Fotos novas disponíveis para assinantes, entra no meu perfil pra ver...</p>
                <img src="assets/images/posts/02.png" class="w-100" />
            </div>
            <div class="post_reactions">
                <div class="d-flex justify-content-between">
                    <div>
                        <i class="far fa-heart mx-1 mx-lg-2 btn_curtir"></i>
                        <span class="post_comment_icon">
                            <span class="num">99+</span>
                            <i class="las la-sms mx-1 mx-lg-2"></i>
                        </span>
                        <i class="far fa-paper-plane mx-1 mx-lg-2"></i>
                    </div>
                    <div>
                        <i class="fas fa-dollar-sign mx-1 mx-lg-0"></i> <span class="d-none d-lg-inline-block mr-1 position-relative fw-500" style="top:-4px;">Send Tip</span>
                        <i class="las la-eye mx-1 mx-lg-2"></i>
                        <i class="las la-file-video mx-1 mx-lg-2"></i>

                        <i class="lar la-bookmark mx-1 mx-lg-2 ml-lg-4"></i>
                    </div>
                </div>
            </div>
            <div class="post_comments">
                <div class="post_comment">
                    <div class="comment_user">
                        <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>
                        <div class="comment_info">
                            <div class="d-flex justify-content-between w-100">
                                <div class="flex-1">
                                    <h5>Adamastor20</h5>
                                    <p>Nossa que dlc! 🥰🥰🔥</p>

                                    <div class="comment_reactions">
                                        <div class="comment_date">
                                            14min
                                        </div>
                                        <div class="comment_like mx-2 mx-lg-4">
                                            <i class="far fa-heart ml-2"></i> <span class="num">73</span> <span class="d-none d-lg-inline-block">curtidas</span>
                                        </div>
                                        <div class="comment_answer flex-1 text-right">
                                            <span>Responder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_action ml-4">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post_comment">
                    <div class="comment_user">
                        <div class="comment_photo" style="background-image:url(assets/images/users/02.png);"></div>
                        <div class="comment_info">
                            <div class="d-flex justify-content-between w-100">
                                <div class="flex-1">
                                    <h5>Adamastor20</h5>
                                    <p>Nossa que dlc! 🥰🥰🔥</p>

                                    <div class="comment_reactions">
                                        <div class="comment_date">
                                            14min
                                        </div>
                                        <div class="comment_like mx-2 mx-lg-4">
                                            <i class="far fa-heart ml-2"></i> <span class="num">73</span> <span class="d-none d-lg-inline-block">curtidas</span>
                                        </div>
                                        <div class="comment_answer flex-1 text-right">
                                            <span>Responder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_action ml-4">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                        </div>
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
                        <button>Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container_right h-100">
    <h4 class="mb-4">Sugestões para você:</h4>

    <div class="cards_sugestion mb-5">
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/01.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="hover">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/03.png);"></div>
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
                        <button class="hover">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/04.png);"></div>
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
                        <button class="hover">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/05.png);"></div>
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
                        <button class="hover">Seguir</button>
                        <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex py-3 px-4">
                        <div class="card_sugestion_photo" style="background-image:url(assets/images/users/03.png);"></div>
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
