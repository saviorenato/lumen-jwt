FROM phpdockerio/php80-fpm:latest
WORKDIR "/var/www"

# Get argument defined in docker-compose file
# ARG user
# ARG uid

ENV user=dean uid=1001

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        curl \ 
        zip \
        unzip \
        php8.0-amqp \ 
        php8.0-decimal \ 
        php8.0-http \ 
        php8.0-mcrypt \ 
        php8.0-memcache \ 
        php8.0-memcached \ 
        php8.0-mongodb \ 
        php8.0-mysql \ 
        php8.0-oauth \ 
        php8.0-odbc \ 
        php8.0-pgsql \ 
        php8.0-psr \ 
        php8.0-redis \ 
        php8.0-soap \ 
        php8.0-sqlite3 \ 
        php8.0-ssh2 \ 
        php8.0-swoole \ 
        php8.0-uuid \ 
        php8.0-xdebug \ 
        php8.0-xmlrpc \ 
        php8.0-xsl \ 
        php8.0-yaml \
        raphf; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install nodejs
RUN apt-get update && apt-get install -y --force-yes nodejs npm

# Get latest Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
