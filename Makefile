.PHONY: deploy install

deploy:
	ssh o2switch 'cd trapuce.com && git fetch --all && git pull origin main && make install'

install: vendor/autoload.php .env public/storage
	php artisan cache:clear
	php artisan migrate
	npm i
	npm run build

.env:
	cp .env.prod .env
	php artisan key:generate

public/storage:
	php artisan storage:link

vendor/autoload.php: composer.lock
	composer install
	touch vendor/autoload.php
