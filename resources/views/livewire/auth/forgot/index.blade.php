<div class="login_screen d-flex align-items-center justify-content-center">

    <div class="bg_01" data-aos="fade-right"></div>
    <div class="bg_02" data-aos="fade-left"></div>
    <div class="bg_03" data-aos="fade-left" data-delay="100"></div>

    <div class="card p-4 p-lg-5">

        <img src="{{ url( 'assets/images/logo2.png' ) }}" alt="BFF Lounger" class="logo mb-5 w-100" />

        <div style="color: red" class="error alert text-center">
            {{ $return }}
        </div>

        <form class="form_cadastro mb-0" wire:submit.prevent="submit">

            <div class="input">
                <input type="email" name="email" placeholder="E-mail:" wire:model="email"/>
            </div>

            <div class="text-center">

                <div class="px-5">
                    <button class="btn-primary w-100 mt-2 mb-4">
                        Enviar
                    </button>
                </div>

            </div> <!-- text-center -->

        </form>

    </div>
</div>

<div class="login_footer">
    <div class="container">
        <div class="d-block d-lg-flex align-items-center justify-content-between text-center text-lg-left">
            <div class="small">
                <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block">Política de Privacidade</a>
                <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block">Termos do Serviço</a>
                <a href="#" class="mb-4 mb-lg-0 d-block d-lg-inline-block">Política de Cookies</a>
            </div>
            <div>
                <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block"><i class="far fa-question-circle"></i> O que é o BFF Lounge?</a>
            </div>
        </div>
    </div>
</div>
