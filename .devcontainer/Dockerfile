FROM php:8.2-apache

# Install MariaDB client and PDO extensions
RUN apt-get update && apt-get install -y mariadb-client git \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Configure Apache virtual host to serve from /workspace
RUN echo "<VirtualHost *:80>\n\
    DocumentRoot /workspace\n\
    <Directory /workspace>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf
