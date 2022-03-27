//AOS
$(function(){
    AOS.init();
});

//BOOTSTRAP
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

//TOASTER
function closeToaster(){
    setTimeout(function(){
        $('.toaster').removeClass('active');
    },4000);
}

//AJUSTA PLACEHOLDER FILTRO MOBILE
$(function(){
    if($(window).width()<=990){
        $('[name="filtrar"]').attr('placeholder','Pesquisar...');
    }
});

//MENU LATERAL
$(function(){
    $(document).on('click','.btn_menu',function(){
        $(this).find('.hamburger').toggleClass('is-active');
        $('.container_left').toggleClass('active');
        $('.menu_background').fadeToggle(300);
    });

    $(document).on('click','.btn_menu_right',function(){
        $(this).find('.hamburger').toggleClass('is-active');
        $('.page_container').toggleClass('active');
    });

    $('.menu_background').on('click',function(){
        $(this).fadeOut('fast');
        $('.btn_menu').find('.hamburger').removeClass('is-active');
        $('.container_left').removeClass('active');
        $('.page_container').removeClass('active');
    });
});

//CURTIR POST
$(document).on('click','.post_reactions .btn_curtir',function(){
    var icon = $(this);
    if($(icon).hasClass('far')){
        $(this).removeClass('far').addClass('fas');
    }else{
        $(this).removeClass('fas').addClass('far');
    }
});

//CURTIR RESPOSTA
$(document).on('click','.comment_like',function(){
    var icon = $(this).find('i');
    var num = $(this).find('.num').html();
    if($(icon).hasClass('far')){
        num++;
        $(this).find('i').removeClass('far').addClass('fas');
        $(this).find('.num').html(num);
    }else{
        num--;
        $(this).find('i').removeClass('fas').addClass('far');
        $(this).find('.num').html(num);
    }
});

//RESPONDER
$(document).on('click','.comment_answer',function(){
    $(this).parents('.post').find('.new_comment').show();
    $(this).parents('.post').find('.new_comment').find('textarea').focus();
});

//AJUSTE FOTOS AMIGOS
$(function(){
    $(window).on('resize',function(){
        if($(window).width()<=990){
            var height = $('.friend_photo').width();
            $('.friend_photo').height(height);
        }
    }).resize();
});

//TABS
$(function(){
    $(document).on('click','[data-tab_link]',function(){
        var tab = $(this).data('tab_link');
        $('[data-tab_link]').removeClass('active');
        $(this).addClass('active');
        $('[data-tab]').hide();
        $('[data-tab="'+tab+'"]').fadeIn('fast');
    });
});

//FILTRO CHATS
$(function(){
    $(document).on('click','.chat_filter li',function(){
        var filter = $(this).data('filter_link');
        $('.chat_list').find('.empty').remove();
        $(this).parents('.chat_filter').find('li').removeClass('active');
        $(this).addClass('active');
        $('[data-filter]').hide();
        if(filter=='all'){
            $('[data-filter]').fadeIn('fast');
        }else{
            $('[data-filter="'+filter+'"]').fadeIn('fast');
        }
        if($('.chat_list').find('li:visible').length==0){
            $('.chat_list').append('<p class="empty">Nenhuma conversa encontrada</p>');
        }else{
            $('.chat_list').find('.empty').remove();
        }
    });
});

//ABRE CHAT
$(function(){
    $(document).on('click','.chat_list .chat_name, .chat_list .chat_user, .chat_list .chat_message_min',function(){
        $(this).parents('li').removeClass('chat_alert');
        $(this).parents('li').find('.chat_date i').remove();
        $('.chat_empty').hide();
        $('.chat_transmition').hide();
        $('.chat_message_transmition').hide();
        $('.chat_messages').not('.transmition').show();
        $('.container_right').animate({scrollTop:10000},0);
        $('.container_right').addClass('active');
    });
});

//REMOVE CHAT
$(function(){
    $(document).on('click','.chat_remove',function(){
        $(this).parents('li').remove();
        $('.chat_empty').show();
    });
});

//NOVA TRANSMISSÃO
$(function(){
    $(document).on('click','.btn_transmition',function(){
        $('.chat_empty').hide();
        $('.chat_messages').hide();
        $('.chat_message_transmition').hide();
        $('.chat_filter').hide();

        $('.chat_transmition').show();
        $('.container_center').addClass('transmition');
        $('.container_center').find('.container_checkbox').fadeIn('fast');
        $('.transmition_select_all').show();
        $('.chat_filter.transmition').show();
        $('.subtitle').css({'display':'block'});
    });
});

//SELECIONA USUÁRIOS TRANSMISSÃO
$(function(){
    $(document).on('change','.chat_list li [name="transmition"]',function(){
        $('.chat_transmition_users').find('ul').empty();
        $('.chat_list li').each(function(){
            if($(this).find('[name="transmition"]').is(':checked')){
                $(this).clone().appendTo('.chat_transmition_users ul');
            }
        });
        var count = $('.chat_transmition_users').find('li').length;
        $('.chat_transmition_count').find('.num').html(count);
    });
});

//REMOVE USUÁRIOS TRANSMISSÃO
$(function(){
    $(document).on('change','.chat_transmition li [name="transmition"]',function(){
        var count = $('.chat_transmition_users').find('li').length - 1;
        $(this).parents('li').remove();
        $('.chat_transmition_count').find('.num').html(count);
    });
});

//ABRE CHAT TRANSMISSÃO
$(function(){
    $(document).on('click','.btn_new_transmition',function(){
        $('.chat_empty').hide();
        $('.chat_messages').hide();
        $('.chat_transmition').hide();
        $('.transmition_select_all').hide();
        $('.chat_messages.transmition').show();
        $('.chat_transmition_count.list').show();
        $('.container_right').addClass('active');
    });
});

//BOTÃO VOLTAR MOBILE
$(function(){
    $(document).on('click','.btn_back',function(){
        $('.container_right').removeClass('active');
    });
});

//MÁSCARAS FORMULÁRIO
$(function(){
    $('[name="telefone"]').mask('(00) 0000-0000');
    $('[name="celular"]').mask('(00) 0000-00000');
    $('[name="cpf"]').mask('000.000.000-00');
    $('[name="agencia"]').mask('0000');
    $('[name="digito"]').mask('0');
});

//MOSTRAR SENHA
$(function(){
    $(document).on('click','.show_password',function(){
        $(this).parents('.input').find('input').attr('type', function(index, attr){
            return attr == 'password' ? 'text' : 'password';
        });
        $(this).toggleClass('hide_password');
    });
});

//LOGIN
$(function(){
    $(document).on('submit','#login',function(e){
        e.preventDefault();
        window.location.replace('index.html');
    });
});

//NEW POST
$(function(){
    $(document).on('click','.btn_new_post',function(){
        $('.modal_default[data-modal="post"]').fadeIn('fast');
        setTimeout(function(){
            $('.modal_default').addClass('active');
        },100);
    });
});

//NEW ACOUNT
$(function(){
    $(document).on('click','.btn_new_account',function(){
        $('.modal_default[data-modal="banco"]').fadeIn('fast');
        setTimeout(function(){
            $('.modal_default').addClass('active');
        },100);
    });
});

//CLOSE MODAL
$(function(){
    $(document).on('click','.modal_default .bg',function(){
        setTimeout(function(){
            $('.modal_default').fadeOut('fast');
        },100);
        $('.modal_default').removeClass('active');
    });
});

//COLLAPSE ICON
$(function(){
    $(document).on('click','[data-toggle="collapse"][aria-expanded="true"]',function(){
        $(this).find('.fa-chevron-up').removeClass('fa-chevron-up').addClass('fa-chevron-down');
    });
    $(document).on('click','[data-toggle="collapse"][aria-expanded="false"]',function(){
        $(this).find('.fa-chevron-down').addClass('fa-chevron-up').removeClass('fa-chevron-down');
    });
});
