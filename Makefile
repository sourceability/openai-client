openai-openapi:
	git clone git@github.com:openai/openai-openapi.git

generated: openai-openapi
	vendor/bin/jane-openapi generate

.PHONY: php
php:
	docker run -it --rm -v "$$PWD":/usr/src/app:cached thecodingmachine/php:8.1-v4-cli bash

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
cs:
	vendor/bin/ecs
