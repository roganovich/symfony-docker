# SymfonyDocker

## Docker
```bash
DOCKER_BUILDKIT=0 docker-compose -f docker/docker-compose.yml build
```
```bash
DOCKER_BUILDKIT=0 docker-compose -f docker/docker-compose.yml up -d
```
```bash
docker exec -it 7ffdcc780632 bash
```
```bash
php bin/console cache:clear
```

## Doctrine
```bash
php bin/console doctrine:schema:validate
```
### Migrations
```bash
php bin/console doctrine:migrations:diff
```
```bash
php bin/console doctrine:migrations:migrate
```
## Tests
```bash
php /var/www/vendor/phpunit/phpunit/phpunit
```
## Fixtures
```bash
php bin/console doctrine:fixtures:load --env=test
```

