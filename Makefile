COMPOSER ?= /usr/bin/composer

### Dependencies
depend:
	${COMPOSER} install --no-progress --optimize-autoloader

autoload:
	${COMPOSER} dumpautoload

.PHONY: depend

### Cleaning
clean:
	rm -rf vendor

.PHONY: clean

### QA
lint:
	find ./src -name "*.php" -exec /usr/bin/env php -l {} \; | grep "Parse error" > /dev/null && exit 1 || exit 0

test:
	php vendor/bin/phpunit -v --colors

.PHONY: lint test
