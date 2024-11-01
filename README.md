# News task

### Hello, to run project first have php8.3 and php-sqlite extension installed. For db, you can use mysql or others, but sqlite is just fine. Then follow:
```bash

git clone https://github.com/nurmuhammet-ali/news-task news
cd news

composer install

cp .env.example .env

php artisan key:generate

touch database/database.sqlite

php artisan migrate --seed

php artisan storage:link

php artisan serve
