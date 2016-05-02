# wp-install-composer

Original instructions
https://davidwinter.me/install-and-manage-wordpress-with-composer/

## You don't have the Composer?

Download from [the Composer site](https://getcomposer.org/download/) then `mv composer.phar /usr/bin`

## Step 1

Create empty directory for the server root, then navigate to it and download:

* `mkdir /var/www/wordpress`
* `cd /var/www/wordpress`
* `git clone https://github.com/mikemix/wp-install-composer.git .`

## Step 2

Install Wordpress and trigger post install scripts:

`composer install && composer install`

## Step 3

Fine tune the `public/wp-config.php` file.

## Test with the PHP server

`php -S 0.0.0.0:8080 -t web`
