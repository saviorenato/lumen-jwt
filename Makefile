# Recipes
VALIDPROJECT ?= src/*
ENV ?= src/.env

all: $(VALIDPROJECT) $(ENV) init

env-import: $(ENV)
$(ENV):
	@cp src/.env.example src/.env
	@docker exec -it app php artisan key:generate
project-framework:
$(VALIDPROJECT):
	composer create-project --prefer-dist laravel/lumen src
init:
	@docker-compose up -d
list:
	@docker exec -it app php artisan list
login:
	@docker exec -it app bash
build:
	@docker-compose up -d --build
	@make install-dependencies
install-dependencies:
	@docker exec -it app composer install

.PHONY: all project-framework env-import init
