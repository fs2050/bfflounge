<div class="modal fade" id="selectCardDialog" tabindex="-1" role="dialog" aria-labelledby="selectCardDialogLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectCardDialogLabel">Escolha a forma de pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <h4>Saldo atual R$ 0,00</h4> -->

                <h5 class="pt-3" style="color: rgb(184, 184, 184); margin-top: 10px;">Valores em Reais (BRL)</h5>

                <div class="row d-flex justify-content-center ">
                    <button type="button" class="btn btn-item active btn-tip-show-value">
                        15*
                    </button>
                </div>

                <h4 class="pt-5" style="color: black; font-style: italic;">Métodos</h4>

                <div id="myDIV" style="text-align: center;">
                    <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                        Cartao de credito
                    </button>
                    <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                        PIX
                    </button>
                    <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2 active">
                        Pic Pay
                    </button>
                </div>
                <div data-v-58e484df="" class="row" style="">
                    <div data-v-58e484df="" class="text-right col" style="font-size: 11px;">Limite Diário
                        R$&nbsp;0,00/500.00</div>
                    <div data-v-58e484df="" class="col" style="font-size: 11px;">Limite Mensal R$&nbsp;0,00/500.00</div>
                </div>

                <div data-v-58e484df="" class="row title_value_wallet pt-5">
                    <h4 data-v-58e484df="">Seus Cartões</h4>
                    <table class="table table-striped table-bordered table-cards">
                        <thead>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Selecionado</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="text-right">
                    <button class="btn btn-warning btn-rounded mt-5 btn-go-to-cards">Novo</button>
                    <button class="btn btn-primary mt-5 btn-submit-tip">
                        <span class="spinner-border spinner-border-sm preload" style="display: none;" role="status" aria-hidden="true">&nbsp;</span>
                        Confirmar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
