# Базовый контейнер у меня - это php с нужной мне версией в нужной мне сборке
FROM php:7.4-fpm

# Назначаю рабочую папку проекта (/var/www/html - стандарт для nginx сервера)
WORKDIR /var/www/html

# обновляю систему и ставлю unzip и другие мелкие утилиты
RUN apt update && apt install -y unzip curl mc

# Что бы я мог пользоваться компосером - я его ставлю в момент сборки контейнера
# скопировать composer из контейнера
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# скачать инсталяцию и установить его по другому методу
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# мне необходимо установить Sympony-Cli
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash
RUN apt install -y symfony-cli

# !!!!!!!!!!!!!!!!!
# Если докер файл будет использоваться для окончательного разворачивания проекта
# то нам НУЖНО скопировать исходный код нашего приложения, и установить необходимые зависимости
# Загружаем приложение в докер контейнер
COPY . /var/www/html

# После того, как я загрузил приложение в контейнер - мне необходимо установить зависимости
#RUN composer install
# Если же я собираюсь мотрировать внешний диск - то все изменения внутри рабочей папки будут стерты!!!
# !!!!!!!!!!!!!!!!!

# Команда, которая будет выполнена при запуске контейнера
CMD ["symfony", "server:start"]
