FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html
# Install dependencies, including mysql client
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy application source
COPY . /var/www/html
