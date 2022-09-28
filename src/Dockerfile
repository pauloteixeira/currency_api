FROM php:7.3-fpm

#SET WOKING DIRECTORY
WORKDIR /var/www

#INSTALL DEPENDENCIES
RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    locales jpegoptim optipng pngquant gifsicle \
    libzip-dev \
    zip\
    vim unzip git curl \
    && docker-php-ext-install zip mbstring

#CLEAR CACHE
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

#INSTALL EXTENSIONS
RUN docker-php-ext-install pdo_mysql zip exif pcntl mbstring
# RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
# RUN docker-php-ext-install gd

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# RUN composer install --ignore-platform-reqs
# RUN composer update

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
