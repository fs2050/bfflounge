# BFF Lounge - Frontend

### Instalação

Clonar Projeto
```sh
git clone https://github.com/fs2050/bfflounge

Acessar o projeto
```sh
cd bff-front
```

Copie .env.example para .env
```sh
cp .env.example .env
```

Suba os containers
```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Gere a chave
```sh
./vendor/bin/sail php artisan key:generate
```

Veja funcionando
[http://localhost:82](http://localhost:82)
# bfflounge
