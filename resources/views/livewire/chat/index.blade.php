<link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/chat.css' ) }}">

<div class="container_center h-100 pt-4 pt-lg-5 mx-0">
    <div class="px-3">
        <h4 class="mt-0 mt-lg-5 mb-4 c-pink">
            Mensagens
            <div class="float-right">
                <i class="las la-bullhorn d-inline-block d-lg-none btn_transmition"></i>
                <i class="las la-search cursor-pointer"></i>
                <i class="las la-plus cursor-pointer"></i>
            </div>
        </h4>
        <span class="subtitle">Lista de transmissão</span>
    </div>

    <div class="chat_filter">
        <ul class="d-flex pl-0 px-3">
            <li data-filter_link="all" class="active">Todas</li>
            <li data-filter_link="1">Não lidas</li>
            <li data-filter_link="2">Com gorjeta</li>
            <li data-filter_link="3">
                <span class="chat_filter_notification">99+</span>
                Prioritárias
            </li>
        </ul>
    </div>

    <div class="chat_filter transmition">
        <ul class="d-flex pl-0 px-3">
            <li data-filter_link="all" class="active">Todas</li>
            <li data-filter_link="1">Assinantes</li>
            <li data-filter_link="2">Não assinantes</li>
        </ul>
    </div>

    <div class="transmition_select_all">
        <div class="position-relative px-3 d-flex align-items-center pb-3 justify-content-between">
            <div class="pl-4">
                <label class="container_checkbox">
                    <input type="checkbox" name="transmition">
                    <span class="checkmark"></span>
                </label>

                Seleciona todos
            </div>

            <button class="btn-primary btn_new_transmition"><i class="las la-plus mr-2"></i> Adicionar</button>
        </div>
    </div>

    <div class="chat_transmition_count list">
        <div class="float-right">
            <span class="num">0</span>/1000
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="chat_list">
        <ul class="pl-0">
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/03.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Juliana Bordon</h5>
                                <span class="chat_user">@julianabd</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Oi, tudo bem? Como você tá?
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/07.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Claudia Sanches</h5>
                                <span class="chat_user">@sanclau</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Nossa, você já viu isso aqui?
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/08.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Stephanie Vas</h5>
                                <span class="chat_user">@vasteph</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Lancei uma ontem que o...
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/09.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Paula Campos</h5>
                                <span class="chat_user">@campospaula</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Oi, tudo bem? Como você tá?
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/10.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Vanessa K</h5>
                                <span class="chat_user">@vanessak</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Oi, tudo bem? Como você tá?
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/11.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Paulo Mendes</h5>
                                <span class="chat_user">@mendespaulo</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Nossa, que linda você está
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/12.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Anderson Moreira</h5>
                                <span class="chat_user">@andersonnm</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Oi, tudo bem? Como você tá?
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-filter="3" class="chat_alert">
                <div class="d-flex">
                    <label class="container_checkbox">
                        <input type="checkbox" name="transmition">
                        <span class="checkmark"></span>
                    </label>
                    <div class="chat_photo" style="background-image:url(assets/images/users/13.png);"></div>
                    <div class="chat_info">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="chat_name">Claudio Ribas</h5>
                                <span class="chat_user">@ribasclaudio</span>
                                <i class="las la-times chat_remove cursor-pointer"></i>
                            </div>
                            <div class="col-12">
                                <div class="chat_message_min">
                                    Gostosa, vamos marcar um encontro
                                </div>
                                <div class="chat_date">
                                    12:52 pm <i class="fas fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="container_right">
    <div class="chat_empty h-100">
        <div>
            <p>Selecione a mensagem que você deseja visualizar, inicie uma conversa ou <a href="#" class="btn_transmition">Faça uma transmissão</a></p>
            <button class="btn-primary"><i class="las la-plus"></i> Nova mensagem</button>
        </div>
    </div>

    <div class="chat_messages">
        <div class="chat_user_info">
            <div class="d-flex align-items-center">
                <i class="las la-chevron-left d-block d-lg-none btn_back"></i>
                <div class="chat_photo" style="background-image:url(assets/images/users/03.png);"></div>
                <div class="chat_info">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="chat_name">Juliana Bordon</h5>
                            <i class="las la-times chat_remove cursor-pointer"></i>
                        </div>
                        <div class="col-12">
                            <span class="chat_user">@julianabd</span>
                            <div class="chat_date">
                                12:52 pm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="messages">
            <ul>
                <div class="messages_date">Ontem</div>

                <li class="right">
                    <div class="text">
                        Nossa, mas eu não acreditei
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="left">
                    <div class="text">
                        Eu fui lá, e nada disso tava certo, quando eu percebi ja tava depois do horário e então liguei pro meu agente e nada tava funcionando. Fiquei preocupada nossa...
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="right">
                    <div class="text">
                        Nossa, que isso!
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="left">
                    <div class="text">
                        Eu vi isso, mas achei que era mentira, sabe?
                    </div>
                    <div class="clearfix"></div>
                </li>

                <div class="messages_date">12:52 PM</div>

                <li class="right">
                    <div class="text">
                        Oi, tudo bem? Como você ta depois disso?
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>

            <div class="message_form">
                <div class="d-block d-lg-flex">
                    <div class="message_actions">
                        <i class="las la-paperclip cursor-pointer"></i>
                        <i class="fas fa-image cursor-pointer"></i>
                        <i class="las la-file-video cursor-pointer"></i>
                    </div>
                    <div class="message_text flex-1">
                        <textarea></textarea>
                    </div>
                    <div class="message_button">
                        <button class="btn-primary"><i class="far fa-paper-plane mr-2"></i>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chat_transmition">
        <div class="h-100 d-flex">
            <div class="chat_transmition_count">
                <div class="float-right">
                    <span class="num">0</span>/1000
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="chat_transmition_users">
                <ul></ul>
            </div>

            <div class="chat_transmition_alert">
                <p>Selecione os usuários para quem quer enviar mensagem e clique em nova transmissão</p>
                <button class="btn-primary btn_new_transmition"><i class="las la-plus mr-2"></i> Nova transmissão</button>
            </div>
        </div>
    </div>

    <div class="chat_messages transmition">
        <div class="chat_user_info">
            <div class="d-flex align-items-center">
                <i class="las la-chevron-left d-block d-lg-none btn_back"></i>
                <h5 class="d-block d-lg-none">Nova Transmissão</h5>
                <div class="chat_transmition_count d-block d-lg-none">
                    <div class="float-right">
                        <span class="num">0</span>/1000
                    </div>
                </div>
            </div>
        </div>

        <div class="messages">
            <ul></ul>

            <div class="message_form">
                <div class="d-block d-lg-flex">
                    <div class="message_actions">
                        <i class="las la-paperclip cursor-pointer"></i>
                        <i class="fas fa-image cursor-pointer"></i>
                        <i class="las la-file-video cursor-pointer"></i>
                    </div>
                    <div class="message_text flex-1">
                        <textarea></textarea>
                    </div>
                    <div class="message_button">
                        <button class="btn-primary"><i class="far fa-paper-plane mr-2"></i>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
