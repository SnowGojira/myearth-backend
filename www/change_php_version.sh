#!/bin/sh

PID_FILE=/yjdata/www/tmp/php-fpm.pid

if [ $# != 1 ]; then
	echo "Usage: $0 <PHP Version>"
	echo "PHP Version: 5.2 5.3 5.4 5.5 5.6"
	exit 1;
fi

PHP_VERSION=$1

if [ $PHP_VERSION != "5.2" -a $PHP_VERSION != "5.3" -a $PHP_VERSION != "5.4" -a $PHP_VERSION != "5.5" -a $PHP_VERSION != "5.6" ]; then
	echo "Invalid PHP Version $PHP_VERSION"
	exit 1;
fi

if [ $PHP_VERSION = "5.2" ]; then
	PHP_FPM=/usr/local/php$PHP_VERSION/bin/php-cgi
else
	PHP_FPM=/usr/local/php$PHP_VERSION/sbin/php-fpm
fi

FPM_CONF=/yjdata/www/php-fpm-$PHP_VERSION.conf


if [ ! -x $PHP_FPM ]; then
	echo "$PHP_FPM is not executable"
	exit 1
fi

if [ ! -f $FPM_CONF ]; then
	echo "php configuration failed $FPM_CONF is missing"
	exit 1
fi

if [ -f $PID_FILE ]; then
	kill `cat $PID_FILE`
	sleep 1
fi

sed -i "/php-fpm/d" /etc/rc.local
if [ -f /etc/rc.d/rc.local ]; then
	sed -i "/php-fpm/d" /etc/rc.d/rc.local
fi

if [ $PHP_VERSION = "5.2" ]; then
	$PHP_FPM --fpm --fpm-config $FPM_CONF
	echo "$PHP_FPM --fpm --fpm-config $FPM_CONF" >> /etc/rc.local
	if [ -f /etc/rc.d/rc.local ]; then
		echo "$PHP_FPM --fpm --fpm-config $FPM_CONF" >> /etc/rc.d/rc.local
	fi
else
	$PHP_FPM --fpm-config $FPM_CONF
	echo "$PHP_FPM --fpm-config $FPM_CONF" >> /etc/rc.local
	if [ -f /etc/rc.d/rc.local ]; then
		echo "$PHP_FPM --fpm-config $FPM_CONF" >> /etc/rc.d/rc.local
	fi
fi
