# Project Eupheus
## Web portal to improve management tracking of UHH graduate school applications
Access to the website: http://www.hilo.hawaii.edu/academics/graduate/eupheus

## **Prerequisites**

- Installing dependencies from Composer
  - PHP 5.3.2+
- Laravel Server Requirements
  - PHP 5.5.9+
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Mbstring PHP Extension
  - Tokenizer PHP Extension

## **Configuring Composer**

1. Begin by downloading the &#39;composer installer&#39;

```sh
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
```

## **Configuring the web application on server side**

1. Retrieve the source files from GitHub ( [https://github.com/dalbano96/Project-Eupheus](https://github.com/dalbano96/Project-Eupheus))
2. Navigate to the source folder &#39;eupheus&#39;
3. Run the command &#39;php /bin/composer install&#39; to download the dependencies (laravel, laraadmin, etc.)
4. Set directory permissions for storage and bootstrap/cache to 755
5. Copy &#39;.env.example&#39; to .env
6. Run the command &#39;php artisan key:generate&#39;
7. Modify database settings in &#39;.env&#39;

## **Configuring online code editor (admin and dev)**

1. After running &#39;php /bin/composer install&#39;, run the command &#39;php artisan la:editor&#39;
2. Navigate to the code editor by appending &#39;../laeditor&#39; to the URL
