<div class="container_center h-100 pt-4 pt-lg-5">
    <h4 class="mt-0 mt-lg-5 mb-4 c-pink">
        Configurações
    </h4>

    <div class="card mb-5">
        <div class="container">
            <h2 class="c-pink">Editar Usuário</h2>
        </div>

        <form class="form_cadastro">
            <div class="container pt-0">
                <div class="input">
                    <label>Nome</label>
                    <input type="text" name="nome" wire:model="user.name" readonly />
                </div>

                <div class="input">
                    <label>E-mail</label>
                    <input type="text" name="email" wire:model="user.email" />
                </div>

                <div class="row mb-30">
                    <div class="col-lg-6">
                        <div class="input mb-sm-30">
                            <label>Telefone</label>
                            <input type="tel" name="telefone" wire:model="user.phone" />
                        </div>
                    </div>
                </div>
                <div class="col-12 text-right">
                    <button type="button" onclick="updateAccount()" class="btn-primary">
                        Salvar alterações
                    </button>
                </div>
            </div>

            <div class="bg_light">
                <div class="container">
                    <h2 class="mb-4 c-pink">Segurança</h2>

                    <div class="input">
                        <label>Senha Atual</label>
                        <input type="password" name="senha" wire:model="credentials.current_password" />
                    </div>

                    <div class="input">
                        <label>Nova senha</label>
                        <input type="password" name="senha" wire:model="credentials.password" />
                    </div>

                    <div class="input">
                        <label>Confirmar nova senha</label>
                        <input type="password" name="senha_confirmacao" wire:model="credentials.password_confirmation" />
                    </div>
                </div>
            </div>
            <div class="text-center pb-4">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-danger btn-rounded" onclick="confirmDeleteAccount()">Excluir conta</button>
                    </div>
                    <div class="col-6">
                        <button type="button" onclick="updatePassword()" class="btn-primary">Alterar Senha</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container_right h-100">
    <h4 class="mb-4">Sugestões para você:</h4>

    <div class="cards_sugestion">
        <div class="card_sugestion">
            <div class="cover" style="background-image:url(assets/images/covers/01.png);">
                <div class="row">
                    <div class="col-12 text-right">
                        <button class="btn-primary hover">Seguir</button>
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
                        <button class="btn-primary hover">Seguir</button>
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
                        <button class="btn-primary hover">Seguir</button>
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
                        <button class="btn-primary hover">Seguir</button>
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

<script>
    function confirmDeleteAccount() {
        swal({
            title: "Deseja prosseguir?",
            text: "Tem certeza de que deseja apagar sua conta? Todos os seus dados serão perdidos. Ainda será possível recuperar sua conta por um período de 30 (trinta) dias, logando em sua conta.",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        },
        function(){
            deleteAccount();
        });
    }

    function deleteAccount() {
        Livewire.emit('deleteAccount');
    }

    function updateAccount() {
        Livewire.emit('updateAccount');
    }

    function updatePassword() {
        Livewire.emit('updatePassword');
        swal("Senha atualizada!", "Operação realizada com sucesso", "success");
    }

    function registerListeners () {
        Livewire.on('accountUpdated', () => {
            swal("Conta atualizada!", "Operação realizada com sucesso", "success");
        });

        Livewire.on('passwordUpdated', () => {
            swal("Senha atualizada!", "Operação realizada com sucesso", "success");
        });

        Livewire.on('accountDeleted', () => {
            swal("Conta excluída!", "Operação realizada com sucesso", "success");
            window.location.reload();
        });

        Livewire.on('showErrorMessage', (msg) => {
            swal(msg);
        });
    }

    window.onload = registerListeners;
</script>
