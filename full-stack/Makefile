.PHONY: start-development
start-development: ## Start development
start-development: start-database ensure-database
	docker-compose up -d application
	@echo "ready on http://localhost"

.PHONY: stop-development
stop-development: # Stop development
	docker-compose down

.PHONY: start-database
start-database: ## Start the database
	docker-compose up -d database

.PHONY: ensure-database
ensure-database: ## Ensure the database is ready
	@until docker-compose exec database sh -c 'mysql --user=root --password="$$MYSQL_ROOT_PASSWORD" -e "SELECT 1" >/dev/null 2>&1'; do { printf '.'; sleep 1; }; done; echo 'database ready!';

.PHONY: composer-install
composer-install: ## Install composer dependencies
	docker-compose run --rm composer install

.PHONY: logs
logs: ## View logs
	docker-compose logs -f
