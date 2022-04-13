<div class="modal fade" id="accountDialog" tabindex="-1" aria-labelledby="accountDialogLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountDialogLabel">Conta Bancária</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" />
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tipo de Conta</label>
                            <select class="form-control" name="type">
                                <option value="">Selecione o tipo</option>
                                <option value="picpay">PicPay</option>
                                <option value="gerencianet">Gerenciament</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="first_name" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control" name="last_name" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <input type="date" class="form-control" name="birth" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Documento</label>
                            <input type="text" class="form-control" name="document" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="phone" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" name="state" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label>Rua</label>
                            <input type="text" class="form-control" name="street" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Número</label>
                            <input type="text" class="form-control" name="number" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" class="form-control" name="neighborhood" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" class="form-control" name="zipcode" />
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
