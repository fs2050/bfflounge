@if(is_array($suggestions) && count($suggestions) > 0)
    <h4 class="mb-4">Sugestões para você:</h4>
    <div class="cards_sugestion mb-5">
        @forelse($suggestions as $suggestion)
            <div class="card_sugestion">
                <div
                    class="cover"
                    @if(!is_null($suggestion['cover']))
                        style="background-image:url({{env('BFF_API_STORAGE')}}/profile/{{$suggestion['cover']}});"
                    @else
                        style="background-image:linear-gradient(to right, #cfcfcf, #f5f5f5);"
                    @endif
                >
                    <div class="row">
                        <div class="col-12 text-right">
                            <button type="button" class="hover btn-primary" wire:click="follow('{{$suggestion['id']}}')">Seguir</button>
                            <i class="fas fa-ellipsis-v ml-2 text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex py-3 px-4">
                            @if(!is_null($suggestion['avatar']))
                                <div
                                    class="card_sugestion_photo"
                                    style="background-image:url({{env('BFF_API_STORAGE')}}/profile/{{$suggestion['avatar']}});"
                                >
                                </div>
                            @else
                                <div
                                    class="card_sugestion_photo"
                                    style="background-image:url({{url('no_avatar.jpg')}});"
                                >
                                </div>
                            @endif
                            <div class="card_sugestion_name">
                                <h5>{{$suggestion['name']}}</h5>
                                <span>{{'@'.$suggestion['slug']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

    <script>
        function registerListeners () {
            Livewire.on('showErrorMessage', (msg) => {
                swal(msg);
            });
        }

        window.onload = registerListeners;
    </script>
@endif

