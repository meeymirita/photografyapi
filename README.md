### Docker Compose

1. Запустите сервисы:

```bash
docker-compose up -d
```

###  файл .env:
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=photograf
DB_USERNAME=root
DB_PASSWORD=photograf

### Подключение к базе данных как я показывал

В правом сайдбаре нажать + для добавления нового подключения.
MySQL.
Данные:
User: root
Password: photograf
Нажать Test Connection — если зеленая хуета то но всё ок.

### миграции:
php artisan migrate

### Swagger
#### Запустить php artisan serve и капитально по адресу: http://127.0.0.1:8000/

#### В правом верхнем углу Register и Register, после регистрации сразу форма с токеном
#### моментально скопировать токен для удобного копирования.
#### потом по ссылке Swagger документации:
http://127.0.0.1:8000/api/documentation

## В правом верхнем углу Authorize.

В поле воткни токен который получил после нажатия на кнопку и нажмите Authorize, eсли не удалось или еще что то - Обновить страницу.
