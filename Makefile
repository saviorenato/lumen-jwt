# Recipes
VALIDPROJECT ?= src/*
VALIDVENDOR ?= src/vendor/*
ENV ?= src/.env

all: $(VALIDPROJECT) $(ENV) init $(VALIDVENDOR)

$(ENV):
	@cp src/.env.example src/.env
$(VALIDPROJECT):
	composer create-project --prefer-dist laravel/lumen src
$(VALIDVENDOR):
	make install-dependencies
init:
	@docker-compose up -d
migrate:
	@docker exec -it app php artisan migrate
install-dependencies:
	@docker exec -it app composer install

.PHONY: all init 
