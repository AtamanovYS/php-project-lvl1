install:
	composer install
autoload:
	composer dump-autoload
validate:
	composer validate
update:
	composer update
lint:
	composer run-script phpcs -- --standard=PSR12 src bin
stan:
	composer run-script phpstan
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
brain-progression:
	./bin/brain-progression
brain-prime:
	./bin/brain-prime
push-all:
	git add -A; git commit -m '$(m)'; git push
