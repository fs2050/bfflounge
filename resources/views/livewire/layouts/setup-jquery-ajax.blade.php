@if(session()->has('user'))
    <script>
        $.ajaxSetup({
            beforeSend: (xhr, options) => {
                //configura a baseUrl de forma global
                if (!options.url.includes('http')) {
                    options.url = `{{env('BFF_API_URL')}}/` + options.url;
                }

                //caso o usuário esteja logado o token será incluíndo por padrão nos headers
                xhr.setRequestHeader(
                    'Authorization', `Bearer {{session()->get('user')->token}}`
                );
            }
        });
    </script>
@endif
