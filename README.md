# wp-install-composer

Original instructions
https://davidwinter.me/install-and-manage-wordpress-with-composer/

## Step 1

Create empty directory for the server root, then navigate to it and download:

* `mkdir /var/www/wordpress`
* `cd /var/www/wordpress`
* `git clone https://github.com/mikemix/wp-install-composer.git .`

## Step 2

Install Wordpress and run post install scripts:

`composer install && composer install`

## Step 3

Fine tune the `public/wp-config.php` file.

## Test with the PHP server

`php -S 0.0.0.0:8080 -t web`
