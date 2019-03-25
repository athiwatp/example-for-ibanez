FROM php:7.2.6-fpm

RUN docker-php-ext-install mysqli \
    && docker-php-ext-install json \
    && docker-php-ext-enable mysqli

# TimeZone
RUN cp /usr/share/zoneinfo/Asia/Bangkok /etc/localtime \
&& echo "Asia/Bangkok" >  /etc/timezone

EXPOSE 9000

CMD ["php-fpm"]    