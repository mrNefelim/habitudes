## Анализ привычек с подсчетом дней 

#### Я намеренно оставил стандартную структуру Laravel, потому что понимаю, насколько могут разниться правила оформления кода и его структура в разных компаниях
#### Docker файлы предназначены для разработки. Если вы решите использовать этот код - для деплоя необходимо написать другие файлы докера.

## Установка backend
#### 1. composer install
#### 2. php artisan migrate
#### 3. php artisan passport:install

## Установка frontend
#### yarn install

## Запуск
#### docker network create backend
#### docker network create frontend
#### docker-compose up -d
#### Логин и пароль - admin@admin.com:12345678
