# BFF Lounge - Front

### Instalação
Clonar Projeto
```sh
git clone -b develop https://github.com/luispaulotoniettefranca/bff-front
```

Acessar o projeto
```sh
cd bff-front
```

Criar o Arquivo .env
```sh
cp .env.example .env
```

Subir os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec bff_lounge_front bash
```

Instalar as dependências do projeto
```sh
composer install
```

Please provide a valid cache path.
```sh
cd storage
```

```sh
mkdir -p framework/{sessions,views,cache}
```

```sh
chmod -R 777 framework
```

```sh
chown -R www-data:www-data framework
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Acessar o projeto
[http://localhost:8002](http://localhost:8002)
