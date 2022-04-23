<!-- Modal -->
<div class="modal fade" id="withdrawRequestDialog" tabindex="-1" aria-labelledby="withdrawRequestDialogLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="withdrawRequestDialogLabel">Solicitação de Saque</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Conta Bancária</label>
                            <select class="form-control" name="request_banking_account_id">
                                <option value="">Selecione a Conta</option>
                                @foreach($bankingAccounts as $key => $bankingAccount)
                                    <option value="{{$bankingAccount['id']}}">
                                        Banco: {{$bankingAccount['bank']->name}} Agência: {{$bankingAccount['agency']}} No. Conta: {{$bankingAccount['number']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Valor</label>
                            <input type="text" class="form-control" name="request_value" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-close">Fechar</button>
                <button type="button" class="btn btn-primary btn-send-withdraw-request">Enviar Solicitação</button>
            </div>
        </div>
    </div>
</div>
