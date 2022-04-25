<!-- Modal Form Cartão -->
<div class="modal fade" id="addCardDialog" tabindex="-1" role="dialog" aria-labelledby="addCardDialogLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCardDialogLabel">Dados para pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="padding">
                    <form action="javascript:void(0)" class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Credit Card</strong>
                                    <small>enter your card details</small>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nome</label>
                                                <input class="form-control" name="first_name" type="text"
                                                    placeholder="Digite seu nome">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Sobrenome</label>
                                                <input class="form-control" name="last_name" type="text"
                                                    placeholder="Digite seu sobrenome">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">CPF</label>
                                                <input class="form-control" name="document" type="text"
                                                    placeholder="Digite seu CPF">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Data de Nascimento</label>
                                                <input class="form-control" name="birth" type="date"
                                                    placeholder="Digite sua data de Nascimento">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Digite seu email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Telefone</label>
                                                <input class="form-control" name="phone" type="text"
                                                    placeholder="Digite seu seu telefone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Rua</label>
                                                <input class="form-control" name="street" type="text"
                                                    placeholder="Digite o nome da rua">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group">
                                                <label for="name">Número</label>
                                                <input class="form-control" name="number" type="text"
                                                    placeholder="Número da casa">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="form-group">
                                                <label for="name">CEP</label>
                                                <input class="form-control" name="zipcode" type="text"
                                                    placeholder="Digite o CEP">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Bairro</label>
                                                <input class="form-control" name="neighborhood" type="text"
                                                    placeholder="Digite o nome do bairro">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <label for="name">Estado</label>
                                                <input class="form-control" name="state" type="text"
                                                    placeholder="Digite a sigla do estado">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <label for="name">Cidade</label>
                                                <input class="form-control" name="city" type="text"
                                                    placeholder="Digite o nome da cidade">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>Estamos em conformidade com os <a
                                                            href="https://pt.pcisecuritystandards.org/index.php"
                                                            target="_blank">Padrões de Segurança de Dados da Indústria
                                                            de Cartões de Pagamento.</a></p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="flexRadioDefault" id="flexRadioDefault1" />
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Selecione para confirmar que você tem pelo menos 18 anos
                                                                ou a maioridade legal no lugar em que você reside
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="ccnumber">Número do Cartão de Crédito</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="text"
                                                                placeholder="0000 0000 0000 0000" name="cc_number">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text box-card">
                                                                    <i class="fas fa-credit-card"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4">
                                                    <label for="ccmonth">Mês</label>
                                                    <select class="form-control" name="cc_month" >
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="ccyear">Ano</label>
                                                    <select class="form-control" name="cc_year">
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="cvv">CVV/CVC</label>
                                                        <input class="form-control" name="cc_cvv" type="text"
                                                            placeholder="123">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success float-right btn-continue" type="button">
                                        <i class="mdi mdi-gamepad-circle"></i> Salvar Cartão</button>
                                    <button class="btn btn-sm btn-danger btn-reset" type="reset">
                                        <i class="mdi mdi-lock-reset"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
