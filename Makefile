openai-openapi:
	git clone git@github.com:openai/openai-openapi.git

generated: openai-openapi
	vendor/bin/jane-openapi generate
