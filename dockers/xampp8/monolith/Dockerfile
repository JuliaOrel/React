# Базовый контейнер у меня - это php с нужной мне версией в нужной мне сборке
FROM php:7.4-fpm

# Назначаю рабочую папку проекта (/var/www/html - стандарт для nginx сервера)
WORKDIR /var/www/html

# обновляю систему и ставлю unzip и другие мелкие утилиты
RUN apt update && apt install -y unzip curl mc

# При необходимости я могу развернуть и другие сервисы, в этом же контейнере
# например - redis
# Иногда полезно, что бы внути конетейнера находилась такая служба
# Хотя чаще Redis ставят вместе с базой данных - docker-composer.yml файле
RUN apt install -y lsb-release gpg
RUN curl -fsSL https://packages.redis.io/gpg | gpg --dearmor -o /usr/share/keyrings/redis-archive-keyring.gpg
RUN echo "deb [signed-by=/usr/share/keyrings/redis-archive-keyring.gpg] https://packages.redis.io/deb $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/redis.list
RUN apt update
RUN apt install -y redis

# Добавляем необходимый инструментарий для проекта

# Установка дополнительных расширений PHP для Redis
RUN pecl install redis && docker-php-ext-enable redis
# Уставнока расширений для MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Что бы я мог пользоваться компосером - я его ставлю в момент сборки контейнера
# скопировать composer из контейнера
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# скачать инсталяцию и установить его по другому методу
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer



# !!!!!!!!!!!!!!!!!
# Если докер файл будет использоваться для окончательного разворачивания проекта
# то нам НУЖНО скопировать исходный код нашего приложения, и установить необходимые зависимости
# Загружаем приложение в докер контейнер
COPY .. /var/www/html

# После того, как я загрузил приложение в контейнер - мне необходимо установить зависимости
RUN composer install
# Если же я собираюсь мотрировать внешний диск - то все изменения внутри рабочей папки будут стерты!!!
# !!!!!!!!!!!!!!!!!

# Установим веб сервер для работы
RUN apt install -y nginx
# Скопируем настрйоки что бы он понимал работу с PHP
COPY nginx.conf /etc/nginx/nginx.conf

# Установим супервизор - он нужен что бы я управлял набором запускаемого программного обеспечения
RUN apt install -y supervisor
# Скопируем в контейнер правила запуска нескольких программ
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
# Запустим наш XAMPP - вебсервер и обработчик php
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

