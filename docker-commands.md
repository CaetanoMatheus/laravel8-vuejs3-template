## Run the application
```sh
  docker-compose up --build -d
```
This command will build the images if not builded and bring the container up.


## Run a composer command
```sh
docker-compose run --rm composer install
```
You can change the `install` to any composer command

## Run a artisan command
```sh
docker-compose run --rm artisan migrate:fresh
```
You can change the `migrate:fresh` to any composer command


## Run a yarn command
```sh
docker-compose run --rm yarn install
```
You can change the `install` to any yarn command
