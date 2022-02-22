# Recipes
VALIDPROJECT ?= src/*
ENV ?= src/.env

all: $(VALIDPROJECT) $(ENV) init 

$(ENV):
	@cp src/.env.example src/.env
$(VALIDPROJECT):
	composer create-project --prefer-dist laravel/lumen src
init:
	@docker-compose up -d
migrate:
	@docker exec -it app php artisan migrate
install-dependencies:
	@docker exec -it app composer install

.PHONY: all init 
