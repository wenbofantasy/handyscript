sudo vi /usr/local/php/lib/php.ini

$ sudo /usr/local/php/sbin/php-fpm restart
$ sudo /opt/nginx/sbin/nginx -s reload
$ tail -f /opt/nginx/logs/access.log 
$ tail -f /opt/nginx/logs/error.log 
$ vi /opt/nginx/conf/nginx.conf

wenbo@li412-168:~/src/tar/php-5.2.13$ ./configure  --prefix=/usr/local/php --enable-fastcgi --enable-fpm  --with-mysql

#only with sudo, you can see the pid
$ sudo netstat -tulpn | grep :9000
$ file /etc/init.d/php-fastcgi


php-cgi   -b   9000
bob@bob-Vostro-320:php-5.5.1$ ./configure --with-mysql

php -i | grep pdo
