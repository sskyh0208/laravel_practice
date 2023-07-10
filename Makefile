nstall:
	@make build
	@make up
	docker compose exec app composer install
	docker compose exec app cp .env.example .env
	docker compose exec app php artisan key:generate
	docker compose exec app php artisan storage:link
	docker compose exec app chmod -R 777 storage bootstrap/cache
	@make migrate
create-project:
	mkdir -p src
	docker compose build
	docker compose up -d
	docker compose exec app composer create-project --prefer-dist "laravel/laravel=9.*" .
	docker compose exec app composer update
	docker compose exec app cp .env.example .env
	docker compose exec app php artisan key:generate
	docker compose exec app php artisan storage:link
	docker compose exec app chmod -R 777 storage/ bootstrap/cache
	@make migrate
install-breeze:
	docker compose exec app composer update
	docker compose exec app composer require laravel/breeze --dev
	docker compose exec app php artisan breeze:install
up:
	docker compose up -d
build:
	docker compose build
down:
	docker compose down --remove-orphans
logs:
	docker compose logs
ls:
	docker compose ls
restart:
	@make down
	@make up
destroy:
	docker compose down --rmi all --volumes --remove-orphans
migrate:
	docker compose exec app php artisan migrate
migrate-fresh:
	docker compose exec app php artisan migrate:fresh --seed
npm:
	@make npm-install
npm-install:
	docker compose exec web npm install
npm-dev:
	docker compose exec web npm run dev
npm-build:
	docker compose exec web npm run build