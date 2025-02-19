PORT ?= 8000
start:
	PHP_CLI_SERVER_WORKERS=5 php -S 0.0.0.0:$(PORT) -t public
		
update:
	composer update

install:
	composer install --ignore-platform-reqs

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 public
	composer exec -v phpstan analyse -- -c phpstan.neon --ansi

test:
	composer exec --verbose phpunit tests

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

test-coverage-text:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-text

test-coverage-html:
	XDEBUG_MODE=coverage composer exec phpunit tests -- --coverage-html build/over