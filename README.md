Project installation
-----------
* `docker-compose up -d`
* `docker network create nginx-proxy`
* `cp .env.example .env` 
* `docker exec -i articles-system-laravel.test-1 composer install`
* `docker exec -i articles-system-laravel.test-1php artisan key:generate`
* `docker exec -t articles-system-laravel.test-1php artisan migrate:fresh --seed`

## WEB 
1. http://172.21.0.3/articles


## API Endpoints 

1. /api/articles
2. /api/articles/{id}
3. /api/articles/author/{authorId}
4. /api/authors/top-3-last-week
