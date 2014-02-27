# Beehive - Project CS 8803

## Introduction
Backend for Beehive

## Run project on Ubuntu 12.04 LTS

Here is the guide for running beehive on Ubuntu 12.04 LTS. Steps may change on different OS (Windows, Mac, etc)

You can also see the Laravel Installation guide here: [http://laravel.com/docs/installation](http://laravel.com/docs/installation)

Install Composer using curl:

	$ curl -sS https://getcomposer.org/installer | php
	
Download Laravel:

	$ wget http://laravel.com/laravel.phar

Clone the beehive project:

	$ git clone git@github.com:zhenyi2697/beehive.git

Now the project has been cloned. To start the project, go to /beehive and run:

	$ php artisan serve
	
Normally, there will be some errors because you need to install some more staffs:

Update php to php5.4+:

	$ sudo apt-get install python-software-properties
	$ sudo add-apt-repository ppa:ondrej/php5
	$ sudo apt-get update
	$ sudo apt-get upgrade
	$ sudo apt-get install php5

Install php5-curl:
	
	$ sudo apt-get install php5-curl

Install php5-mcrypt:
	
	$ sudo apt-get install php5-mcrypt

Normally, we can start the laravel embed webserver now.

## Deploy the projet on Apache

To deploy laravel in Apache server, create a virtualhost file like any other site.
Here is a sample configuration file:

	<VirtualHost *:80>
		ServerName beehive.zhangzhenyi.com
		ServerAlias beehive.zhangzhenyi.com
		ServerAdmin zhenyi2697@gmail.com
		
		DocumentRoot /home/zhenyi/blog/public/
		<Directory />
			Options +FollowSymLinks
			AllowOverride All
		</Directory>
		<Directory /home/zhenyi/blog/public/>
			Options +Indexes +FollowSymLinks +MultiViews
			AllowOverride All
			Require all granted
		</Directory>
	</VirtualHost>
	
If Apache version < 2.4, config file is:

	<VirtualHost *:80>
		ServerName beehive.zhangzhenyi.com
		ServerAlias beehive.zhangzhenyi.com
		ServerAdmin zhenyi2697@gmail.com
		
		DocumentRoot /home/zhenyi/blog/public/
		<Directory />
			Options FollowSymLinks
			AllowOverride All
		</Directory>
		<Directory /home/zhenyi/blog/public/>
			Options Indexes FollowSymLinks MultiViews
			AllowOverride All
			Order allow,deny
			Allow from all
		</Directory>
	</VirtualHost>
	
Enable modwrite:
	
	$ sudo a2enmod rewrite

Reload and restart apache:

	$ sudo service apache2 reload
	$ sudo service apache2 restart
	
If have some errors restarting apache, just follow the error messages.
You may want to do the followings:

	## Replace in /etc/apache2/apache2.conf
	LockFile /var/lock/apache2/accept.lock
	
	## with
	Mutex file:${APACHE_LOCK_DIR} default
	
At last, we should change the permission of the storage folder:

	# World-writable (Group, User, Other Writable)
	$ sudo chmod -R guo+w app/storage


@author FrenchFries


