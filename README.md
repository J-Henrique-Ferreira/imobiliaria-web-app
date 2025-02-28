-   :movie_camera:(https://academy.especializati.com.br/curso/laravel-10-gratuito).

## Passo a passo para rodar o projeto

Clone o projeto

```sh
git clone https://github.com/especializati/curso-de-laravel-10.git laravel-10
```

```sh
cd laravel-10/
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Atualize essas variáveis de ambiente no arquivo .env

```dosini
APP_NAME="Especializa Ti"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Suba os containers do projeto

```sh
docker-compose up -d
```

Acesse o container

```sh
docker-compose exec app bash
```

Instale as dependências do projeto

```sh
composer install
```

Gere a key do projeto Laravel

```sh
php artisan key:generate
```

Crie um link simbólico para acessar as mídias do projeto

```sh
php artisan storage:link
```

Esse comando cria um link simbólico de public/storage para storage/app/public, tornando os arquivos dentro do diretório storage/app/public acessíveis publicamente.

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
