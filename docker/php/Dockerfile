FROM --platform=linux/arm64 php:8.1-fpm 


# ------------ Install MS SQL client deps ------------ #
# RUN apt-get update \
#     && apt-get install -y gpg unixodbc unixodbc-dev \
#     && docker-php-ext-install pdo pdo_mysql \
#     && pecl install sqlsrv pdo_sqlsrv

# adding custom MS repository
# RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
# RUN curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-release.list

# RUN echo "extension=sqlsrv.so" >> /usr/local/etc/php/conf.d/docker-php-ext-sqlsrv.ini
# RUN echo "extension=pdo_sqlsrv.so" >> /usr/local/etc/php/conf.d/docker-php-ext-pdo-sqlsrv.ini
# -------------- END MSSQL -------------------------------- #


RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get upgrade -y