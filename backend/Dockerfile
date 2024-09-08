FROM php:8.0-apache

# PostgreSQL関連のライブラリをインストール
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# ソースコードをコンテナにコピー
COPY . /var/www/html

# Apacheの起動
CMD ["apache2-foreground"]