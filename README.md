# BFF Lounge - Front

### Instalação

Clonar Projeto
```sh
git clone https://github.com/luispaulotoniettefranca/bff-front
```

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
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec bff_lounge_front bash
```

Instale as dependências
```sh
composer update
```

Saia do container e vá para a pasta "storage"
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
sudo chown -R www-data:www-data framework
```

Volte para a pasta raiz do projeto
```sh
cd ..
```

Acesse o container novamente
```sh
docker-compose exec bff_lounge_front bash
```

Gere a chave
```sh
php artisan key:generate
```

Veja funcionando
[http://localhost:8010](http://localhost:8010)
