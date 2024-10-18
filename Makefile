APP_DIR = /app

DOCKER_COMPOSE_EXEC_PHP = docker exec -tiw $(APP_DIR) wemovies-php
DOCKER_COMPOSE_EXEC_NODE = docker exec -tiw $(APP_DIR) wemovies-node

build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

install:	composer_install npm_install webpack

composer_install:
	$(DOCKER_COMPOSE_EXEC_PHP) composer install

npm_install:
	$(DOCKER_COMPOSE_EXEC_NODE) npm install

webpack:
	$(DOCKER_COMPOSE_EXEC_NODE) npm run webpack

webpack_watch:
	$(DOCKER_COMPOSE_EXEC_NODE) npm run webpack -- --watch
