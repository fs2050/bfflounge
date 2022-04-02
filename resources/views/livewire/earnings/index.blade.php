<link rel="stylesheet" type="text/css" href="{{ asset( 'assets/css/earnings.css' ) }}">

<div class="container_center h-100 pt-4 pt-lg-5">
    <h4 class="mt-0 mt-lg-5 mb-4 mb-lg-5 c-pink">
        Estimativa de Ganhos
    </h4>

    <div class="card border_pink py-2 px-5 mb-4">
        <div class="px-3">
            <div class="d-flex align-items-center justify-content-center">
                <i class="fas fa-star text-warning fs-24 mr-3"></i>
                <p class="mb-0">Você está entre os top 9,7% Influenciers do BFF Lounge</p>
            </div>
        </div>
    </div>

    <div class="card shadow p-4 mb-5">
        <div class="d-flex w-100 align-items-center justify-content-between cursor-pointer" data-toggle="collapse" data-target="#saldo-pendente" aria-expanded="true">
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
                    <button class="btn-primary">Solicitar saque</button>
                </div>
            </div>
        </div>
    </div>

    <div class="menu_earnings">
        <ul>
            <li><a href="{{ route( 'chargebacks.index' ) }}"><i class="las la-list"></i> Lista de Estornos</a></li>
            <li><a href="{{ route( 'indications.index' ) }}"><i class="las la-user-friends"></i> Programa de Indicação</a></li>
            <li class="active"><a href="{{ route( 'earnings.index' ) }}"><i class="las la-hand-holding-usd"></i> Estimativa de Ganhos</a></li>
            <li><a href="{{ route( 'subscribers.index' ) }}"><i class="las la-users"></i> Inscritos</a></li>
            <li><a href="{{ route( 'my-earnings.index' ) }}"><i class="las la-dollar-sign"></i> Meus Ganhos</a></li>
            <li><a href="#"><i class="las la-box"></i> Editar meus planos e pacotes</a></li>
        </ul>
    </div>
</div>

<div class="container_right">
    <div class="mb-5">
        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#janeiro" aria-expanded="true">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Janeiro, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse show" id="janeiro">
                <div class="box_earnings_body">
                    <div id="chart_1" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#fevereiro" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Fevereiro, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="fevereiro">
                <div class="box_earnings_body">
                    <div id="chart_2" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#marco" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Março, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="marco">
                <div class="box_earnings_body">
                    <div id="chart_3" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#abril" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Abril, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="abril">
                <div class="box_earnings_body">
                    <div id="chart_4" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#maio" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Maio, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="maio">
                <div class="box_earnings_body">
                    <div id="chart_5" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#junho" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Junho, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="junho">
                <div class="box_earnings_body">
                    <div id="chart_6" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#julho" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Julho, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="julho">
                <div class="box_earnings_body">
                    <div id="chart_7" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="box_earnings mb-4">
            <div class="box_earnings_header" data-toggle="collapse" data-target="#agosto" aria-expanded="false">
                <div class="title_min">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            Agosto, 2022
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-down ml-2 c-pink"></i>
                        </div>
                    </div>
                </div>
                <div class="title_max">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div>
                            <i class="far fa-calendar c-pink fs-18 mr-0 mr-lg-5"></i>
                        </div>
                        <div class="c-pink font-weight-bold">
                            <span class="d-none d-lg-inline-block">01/02/2022 ao dia 01/03/2022</span>
                            <span class="d-inline-block d-lg-none">01/02 a 01/03</span>
                        </div>
                        <div>
                            $9500,92 <i class="fas fa-chevron-up ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="agosto">
                <div class="box_earnings_body">
                    <div id="chart_8" class="chart"></div>

                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle c-green mr-1"></i> Inscritos</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-pink mr-1"></i> Tips</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-blue mr-1"></i> Post</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-orange mr-1"></i> Indicações</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle c-red mr-1"></i> Live</td>
                                <td class="text-center">$2037,02</td>
                                <td class="text-right">$1492,21</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="text-center"><span class="text-secondary font-weight-bold">Bruto</span> $12194,80</td>
                                <td class="text-right"><span class="text-secondary font-weight-bold">Líquido</span> $12194,80</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
