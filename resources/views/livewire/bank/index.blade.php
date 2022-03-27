<link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/earnings.css' ) }}">

<div class="container_center h-100 pt-4 pt-lg-5">
    <h4 class="mt-0 mt-lg-5 mb-4 mb-lg-5 c-pink">
        Estimativa de Ganhos
    </h4>

    <div class="card border_pink py-2 px-5 mb-4">
        <div class="px-3">
            <div class="d-flex align-items-center justify-content-center">
                <i class="fas fa-star text-warning fs-24 mr-3"></i>
                <p class="mb-0">Você está entre os top 9,7% Influencers do BFF Lounge</p>
            </div>
        </div>
    </div>

    <div class="card shadow p-4 mb-5">
        <div class="d-flex w-100 align-items-center justify-content-between cursor-pointer" data-toggle="collapse"
            data-target="#saldo-pendente" aria-expanded="true">
            <p class="mb-0 text-uppercase">
                Saldo atual
            </p>
            <p class="mb-0 text-uppercase">
                $634.94 <i class="fas fa-chevron-up c-pink ml-2 fs-24 align-middle"></i>
            </p>
        </div>

        <div class="collapse show" id="saldo-pendente">
            <div class="d-flex w-100 align-items-center justify-content-between mt-4">
                <p class="mb-0 text-uppercase">
                    Saldo pendente
                </p>
                <p class="mb-0">
                    <i class="far fa-question-circle c-pink"></i>
                </p>
                <p class="mb-0 text-uppercase">
                    $196.39
                </p>
            </div>

            <hr />

            <select class="my-2 w-100">
                <option value="Saques manuais">Saques manuais</option>
            </select>

            <span class="text-uppercase d-block fs-12">Valor mínimo para saque de $20</span>

            <div class="text-center mt-4">
                <div class="px-4">
                    <button>Solicitar saque</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container_right">
    <div class="mb-5">
        <div class="px-3 ff-ibm">
            <p>Sua conta bancária já foi verificada!</p>
            <p>Defina os <a href="#" class="c-pink text-underline">preços dos planos e pacotes</a> e comece a se
                promover no BFF Lounge!</p>
            <p><b class="c-pink">Suas Contas Bancárias</b></p>
        </div>

        <div class="card shadow py-4 py-lg-3 px-4">
            <div class="d-block d-lg-flex text-center text-lg-left align-items-center justify-content-between">
                <div class="mb-4 mb-lg-0">
                    <span class="c-pink d-block mb-2">
                        Instituição:
                    </span>
                    237 - Itaú
                </div>
                <div class="mb-4 mb-lg-0">
                    <span class="c-pink d-block mb-2">
                        Agência:
                    </span>
                    XX28
                </div>
                <div class="mb-4 mb-lg-0">
                    <span class="c-pink d-block mb-2">
                        Conta:
                    </span>
                    XXX4138-8
                </div>
                <div>
                    <button>Trocar conta</button>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="transparent btn_new_account">
                <i class="fas fa-plus"></i> Adicionar nova conta bancária</button>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{ asset( 'assets/js/charts.js' ) }}"></script>
<script type="text/javascript">
    loadCharts();
</script>
