<div class="modal fade" id="accountDialog" tabindex="-1" aria-labelledby="accountDialogLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountDialogLabel">Conta Bancária</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" />
                @if(isset($profile['id']))
                    <input type="hidden" name="profile_id" value="{{$profile['id']}}" />
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="person_name" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Documento</label>
                            <input type="text" class="form-control" name="person_document" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Banco</label>
                            <select class="form-control" name="bank_id"></select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Agencia</label>
                            <input type="text" class="form-control" name="agency" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Número da Conta</label>
                            <input type="text" class="form-control input-account-number" name="number" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-close">Fechar</button>
                <button type="button" class="btn btn-primary btn-save">Salvar</button>
            </div>
        </div>
    </div>
</div>
