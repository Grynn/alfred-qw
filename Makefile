.PHONY: test

qw.phar: vendor
	pharcc build

clean:
	rm qw.phar

vendor: composer.json
	composer install

test: vendor
	composer test
