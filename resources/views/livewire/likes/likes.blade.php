<link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/chat.css' ) }}">



<div class="container px-5 pt-3"  >
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

