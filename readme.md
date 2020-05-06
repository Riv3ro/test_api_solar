
## Тествое задание - API (SOLAR)

**Этапы установки:**

 1. Клонирвать репозиторий -  [https://github.com/Riv3ro/test_api_solar.git]
 2. Установить зависимости - composer install
 3. Создать файл .env  - cp .env.example .env
 4. Создать APP_KEY для .env - php artisan key:generate
 5. Создать базу данных и прописать параметры в .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD)
 6. Изменить права доступа к папкам: /storage и /bootstrap/cache - "chmod -R 755 /storage" и "chmod -R 755 /bootstrap/cache"
 7. Выполнить команду php artisan migrate --seed

 Для phpunit тестов необходимо создать файл .env.testing
