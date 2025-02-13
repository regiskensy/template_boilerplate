FROM php:8.3-fpm

# Instalar dependências do sistema e extensões PHP em uma única camada
RUN apt-get update && apt-get install -y \
    # Instala o procps (que contém o pgrep) para o healthcheck
    procps \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libpq-dev \
    libonig-dev \
    libsqlite3-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        soap \
        pdo_pgsql \
        pdo_sqlite \
        opcache \
        gd \
        mbstring \
        zip \
    # Limpar cache do apt e arquivos temporários
    && apt-get clean \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /tmp/* /var/tmp/* \
    # Limpar arquivos de cache do PHP
    && rm -rf /var/cache/php/* \
    # Remover arquivos de desenvolvimento das extensões
    && docker-php-source delete

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar configurações do PHP
COPY php.ini /usr/local/etc/php/php.ini

# Definir diretório de trabalho
WORKDIR /var/www/html
