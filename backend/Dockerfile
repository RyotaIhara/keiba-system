# PHP 8.1を指定
FROM php:8.1-fpm

# PostgreSQL関連のライブラリをインストール
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Laravel のディレクトリをプロジェクトにコピー
COPY . /var/www

# パーミッションの修正
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage