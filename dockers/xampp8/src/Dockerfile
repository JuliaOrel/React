FROM php:7.4-fpm

# Назначаю рабочую папку проекта (/var/www/html - стандарт для nginx сервера)
WORKDIR=/var/www/html

RUN apt update && apt install -y unzip curl mc
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# скачать инсталяцию и установить его по другому методу
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# !!!!!!!!!!!!!!!!!
# Если докер файл будет использоваться для окончательного разворачивания проекта
# то нам НУЖНО скопировать исходный код нашего приложения, и установить необходимые зависимости
# Загружаем приложение в докер контейнер
COPY ./src /var/www/html

# После того, как я загрузил приложение в контейнер - мне необходимо установить зависимости
RUN composer install
# Если же я собираюсь мотрировать внешний диск - то все изменения внутри рабочей папки будут стерты!!!
# !!!!!!!!!!!!!!!!!
