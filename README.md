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

Problem 1: Please provide a valid cache path.
```sh
cd storage
```

Crie as pastas "framework, sessions, views e cache"
```sh
mkdir -p framework/{sessions,views,cache}
```

Adicione permissão para a pasta "framework"
```sh
chmod -R 777 framework
```

Adicione permissão e crie um grupo de usuários para a pasta "framework"
```sh
chown -R www-data:www-data framework
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Acessar o projeto
[http://localhost:8002](http://localhost:8002)
