<div class="container_center h-100 mt-5">
    <h4 class="mt-0 mt-lg-5 mb-4 c-pink">Configurações</h4>

    <div class="card">
        <div class="container">
            <h2 class="c-pink">
                Meus Cartões
                <div class="float-right position-relative new_card btn-add-card cursor-pointer" title="Adicionar Cartão">
                    <i class="far fa-credit-card"></i>
                    <i class="fas fa-plus"></i>
                </div>
            </h2>
        </div>

        <div class="tabs_group">
            <div class="tab active" data-tab_link="1">Seus Cartões</div>
            <div class="tab" data-tab_link="2">Pagamentos</div>
            <div class="tab" data-tab_link="3">Métodos alternativos</div>
        </div>

        <div class="container">
            <div data-tab="1" class="credit_card">
                @if(isset($cards) && is_array($cards) && count($cards) > 0)
                    @foreach($cards as $cardIndex => $card)
                        <div class="d-block d-lg-flex justify-content-between w-100 mt-0 mt-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <div class="card_flag">
                                    <img src="{{ asset( 'assets/images/'.$card['type'].'.png' ) }}">
                                </div>
                                <span class="card_number">
                                    {{$card['type']}} {{$card['description']}}
                                </span>
                            </div>
                            <div>
                                <span class="card_expiration">
                                    {{sprintf('%02d', $card['month'])}}/{{$card['year']}}
                                </span>
                            </div>
                        </div>
                        <hr />
                        <!-- <div class="d-flex justify-content-between w-100">
                            <div>
                                <span class="card_status">
                                    Ativo
                                </span>
                            </div>
                            <div>
                                <span class="card_type">
                                    Principal
                                </span>
                            </div>
                        </div> -->
                    @endforeach
                @else
                    Nenhum cartão cadastrado
                @endif
            </div>

            <div data-tab="2" class="payments" style="display:none;">
                <div class="d-flex w-100 mt-0 mt-lg-4 payments_filter">
                    <button class="btn-primary transparent mx-2 active">Todas</button>
                    <button class="btn-primary transparent mx-2">Erros</button>
                    <button class="btn-primary transparent mx-2">Crédito</button>
                    <button class="btn-primary transparent mx-2">Pagamentos</button>
                </div>

                <table class="w-100 mb-3 mt-4">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th class="text-right">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="alerta">
                            <td>Aug 24, 2021, 7:28 pm</td>
                            <td class="text-danger text-right">R$ 10.00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex align-items-baseline">
                    <div>
                        <i class="fas fa-credit-card c-pink-light"></i>
                    </div>
                    <div class="flex-1 pl-2 pr-4">
                        <p class="text-secondary">
                            <b>Compra de 10 créditos</b><br>
                            A transação não foi aceita pela operadora
                        </p>
                    </div>
                    <div>
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="text-secondary mt-3">BFF INC. Brazil</p>
</div>

<div class="container_right h-100 credits mt-60">
    <div class="pb-5">
        <div class="card shadow mb-4">
            <div class="container">
                <h2 class="c-pink">R$ 0</h2>
                <p class="mb-0">Seus créditos</p>

                <hr />

                Adicione créditos na sua carteira

                <div class="d-flex w-100 mt-3">
                    <button class="btn-primary transparent">R$10</button>
                    <button class="btn-primary transparent">R$20</button>
                    <button class="btn-primary transparent">R$50</button>
                    <button class="btn-primary transparent">R$100</button>
                </div>

                <div class="px-3 mt-4">
                    <button class="btn-primary"><i class="las la-plus"></i> Adicionar crédito</button>
                </div>
            </div>
        </div>
        <div class="card shadow mb-5">
            <div class="container">
                <h2 class="c-pink">Últimas transações</h2>

                <table class="w-100 mb-3">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th class="text-right">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="alerta">
                            <td>Aug 24, 2021, 7:28 pm</td>
                            <td class="text-danger text-right">R$ 10.00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex align-items-baseline">
                    <div>
                        <i class="fas fa-credit-card c-pink-light"></i>
                    </div>
                    <div class="flex-1 pl-2 pr-4">
                        <p class="text-secondary">
                            <b>Compra de 10 créditos</b><br>
                            A transação não foi aceita pela operadora
                        </p>
                    </div>
                    <div>
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>

                <div class="px-2 mt-4">
                    <button class="btn-primary">Veja todas as transações</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const currentBuyer = {!! json_encode($buyer) !!}
</script>


@include('livewire.components.cards.add-card-dialog')
