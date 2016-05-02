# wp-install-composer

Original instructions
https://davidwinter.me/install-and-manage-wordpress-with-composer/

## Step 1

Install Wordpress and run post install scripts:

`composer install && composer install`

## Step 2

Fine tune the `public/wp-config.php` file.

## Test with the PHP server

`php -S 0.0.0.0:8080 -t public`
