# Movie Stars

This application has two views:
 - `http://localhost/actors`: Display the list of actors with their movies and filter by actor name.
 - `http://localhost/star-wars`: Search people via Star Wars Api filtering by character name.

The database is seeded with 5 actors and 3 movies and the application uses eloquent relationship between actors and movies.

## Demo
List of Actors:

https://github.com/IBI-Group-Recharge/laravel-assessment-template/assets/3584554/e2377d2b-c18f-4382-8044-530dde35185a

Star Wars people:

https://github.com/arturhayne/movie-stars/assets/3584554/060e44fd-7696-4b3e-8748-f2e0a6c082e7

## PRs
 * [List of Actors](https://github.com/arturhayne/movie-stars/pull/1)
 * [Star Wars people](https://github.com/arturhayne/movie-stars/pull/2)

### Requirements

-   Docker

### How to run  

 1. `docker run --rm -v "$(pwd)":/app -u 1000:1000 -e COMPOSER_HOME=/tmp --workdir /app bitnami/laravel composer install`
 2. `docker run --rm -v "$(pwd)":/app -u 1000:1000 -e COMPOSER_HOME=/tmp --workdir /app bitnami/laravel npm install`
 3. `cp .env.example .env`
 3. `docker-compose up -d`
 4. `docker-compose exec laravel.test bash` (command to get inside the container)
 5. `php artisan migrate` (inside container)
 6. `php artisan db:seed` (inside container)


### Code style
Using [oskarstark](https://github.com/OskarStark/php-cs-fixer-ga) to autofix phpcs
```
docker run --rm -it -w=/app -v ${PWD}:/app oskarstark/php-cs-fixer-ga:latest
```

### Test

```
root@2ac0e285cce9:/var/www/html# vendor/bin/phpunit --testdox
PHPUnit 10.2.2 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.14
Configuration: /var/www/html/phpunit.xml

....                                                                4 / 4 (100%)

Time: 00:04.397, Memory: 16.00 MB

Actor Controller (Tests\Feature\ActorController)
 ✔ Index actors
 ✔ Actors can be filtered by name

Star Wars Api Service (Tests\Unit\Services\StarWarsApiService)
 ✔ Search people returns list of characters

Star Wars Controller (Tests\Feature\StarWarsController)
 ✔ Star wars view

OK (4 tests, 20 assertions)
```
