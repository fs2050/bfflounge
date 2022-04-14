<!-- Modal -->
<div class="modal fade" id="sendTipDialog" tabindex="-1" role="dialog" aria-labelledby="sendTipDialogLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendTipDialogLabel">Obrigado pelo presente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="myDIV" style="text-align: center;">
                    <button data-v-70b0291a="" data-value="5" class="btn btn-item mr-2 ml-2 btn-tip-value">
                        5
                    </button>
                    <button data-v-70b0291a="" data-value="10" class="btn btn-item mr-2 ml-2 btn-tip-value">
                        10
                    </button>
                    <button data-v-70b0291a="" data-value="15" class="btn btn-item mr-2 ml-2 active btn-tip-value">
                        15
                    </button>
                    <button data-v-70b0291a="" class="btn btn-item mr-2 ml-2">
                        ?
                    </button>
                </div>

                <div data-v-70b0291a="" style="padding-left: 20px; padding-right: 20px;">
                    <div data-v-70b0291a=""
                        class="v-input v-textarea v-textarea--auto-grow v-textarea--no-resize theme--light v-text-field v-text-field--is-booted v-text-field--enclosed v-text-field--outlined v-text-field--placeholder">
                        <div class="v-input__control">
                            <div class="v-input__slot">
                                <fieldset aria-hidden="true">
                                    <legend style="width: 0px;"><span>​</span></legend>
                                </fieldset>
                                <div class="v-text-field__slot">
                                    <textarea id="input-617" placeholder="Mensagem (opcional)" rows="5"
                                        class="form-control" name="tip_message"></textarea>
                                </div>
                            </div>
                            <div class="v-text-field__details">
                                <div class="v-messages theme--light">
                                    <div class="v-messages__wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div class="text-right">
                        <button class="btn btn-primary mt-5 btn-tip-next-step" data-toggle="modal"
                        data-target="#selectCardDialog">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
