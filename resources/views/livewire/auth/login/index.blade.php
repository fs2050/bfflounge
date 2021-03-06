<div>

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

                <div class="input password mb-2">
                    <input type="password" name="senha" placeholder="Senha:" wire:model="password" />
                    <i class="fas fa-eye show_password"></i>
                </div>

                <a href="{{ route( 'forgot' ) }}" class="text-right forgot ls-1">
                    Esqueceu a sua senha?
                </a>

                <div class="text-center">

                    <div class="px-5">
                        <button class="btn-primary w-100 mt-2 mb-4">
                            Entrar
                        </button>
                    </div>

                    <span class="fs-14">
                        Ou entre com:
                    </span>

                    <div class="d-flex align-items-center justify-content-center mt-4 mb-5">
                        <a href="#"><img src="{{ asset( 'assets/images/facebook.png' ) }}" alt="Facebook" class="mx-3" /></a>
                        <a href="#"><img src="{{ asset( 'assets/images/twitter.png' ) }}" alt="Twitter" class="mx-3" /></a>
                        <a href="#"><img src="{{ asset( 'assets/images/google.png' ) }}" alt="Google" class="mx-3" /></a>
                    </div>

                    <span class="d-block mb-2 fs-14">
                        Ainda n??o tem uma conta?
                    </span>

                    <a href="{{ route( 'register' ) }}" class="text-uppercase c-pink fs-14 ls-1 fw-500">
                        Cadastre-se
                    </a>

                </div> <!-- text-center -->

            </form> <!-- form_cadastro -->

        </div> <!-- card p-4 p-lg-5 -->

    </div> <!-- login_screen d-flex align-items-center justify-content-center -->

    <div class="login_footer">

        <div class="container">

            <div class="d-block d-lg-flex align-items-center justify-content-between text-center text-lg-left">

                <div class="small">
                    <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block">Pol??tica de Privacidade</a>
                    <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block">Termos do Servi??o</a>
                    <a href="#" class="mb-4 mb-lg-0 d-block d-lg-inline-block">Pol??tica de Cookies</a>
                </div>

                <div>
                    <a href="#" class="mr-0 mr-lg-5 mb-2 mb-lg-0 d-block d-lg-inline-block"><i class="far fa-question-circle"></i> O que ?? o BFF Lounge?</a>
                </div>

            </div>

        </div> <!-- container -->

    </div> <!-- login_footer -->

</div> <!-- -->
