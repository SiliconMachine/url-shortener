FROM php:7.2-fpm

# Configure root directory
WORKDIR /var/www

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Add user Laravel App user
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy directory to /var/www
COPY . /var/www

# Copy app permissions
COPY --chown=www:www . /var/www

# Change user by www
USER www

