openai-openapi:
	git clone git@github.com:openai/openai-openapi.git

generated: openai-openapi
	vendor/bin/jane-openapi generate

.PHONY: php
php:
	docker-compose run --build php bash

.PHONY: rector-check
rector-check:
	vendor/bin/rector process --clear-cache --dry-run

.PHONY: rector
rector:
	vendor/bin/rector process --clear-cache

.PHONY: cs
cs:
	vendor/bin/ecs --fix

.PHONY: cs-check
cs-check:
	vendor/bin/ecs

.PHONY: build
build:
	time (time bin/jane generate ; for in in {1..4} ; do time (vendor/bin/rector process ; vendor/bin/ecs --fix); done)