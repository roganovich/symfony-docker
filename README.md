# SymfonyDocker

## Docker
```bash
docker-compose -f .\docker\docker-compose.yml build
```
```bash
docker-compose -f .\docker\docker-compose.yml up -d
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
## Fixtures
```bash
php bin/console doctrine:fixtures:load --env=test
```