#base image
FROM php:8.1.18RC1-apache-bullseye

#change the working directory
WORKDIR /var/www/html

#change directory permission so can be acceesd with root
RUN chown -R root /var/www/html

#move all files into working directory
COPY . .

#set neccesary environment variables in the .env.example and copy its content to .env
COPY .env.example .env
#===================================================================================

#install dependencies
##dependecies for composer
RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip
###installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

####running composer
RUN composer install

##genereate key
RUN php artisan key:generate

#install frontend depenedencies and running npm install and npm run build
RUN apt-get update && apt-get install -y npm
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# RUN npm install  && npm run build
RUN npm install 
RUN npm run build

#install driver for connect php to mysql
RUN docker-php-ext-install pdo pdo_mysql

#run php migrate
RUN php artisan migrate

# run php seeder for create 2 users as default
RUN php artisan db:seed

# run server
CMD [ "php", "artisan", "serve", "--host=0.0.0.0" ]