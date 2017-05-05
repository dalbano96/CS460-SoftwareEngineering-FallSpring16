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
$ php -r &quot;copy(&#39;https://getcomposer.org/installer&#39;, &#39;composer-setup.php&#39;);&quot;
$ php -r &quot;if (hash\_file(&#39;SHA384&#39;, &#39;composer-setup.php&#39;) === &#39;669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410&#39;) { echo &#39;Installer verified&#39;; } else { echo &#39;Installer corrupt&#39;; unlink(&#39;composer-setup.php&#39;); } echo PHP\_EOL;&quot;
$ php composer-setup.php install-dir=/bin --filename=composer
$ php -r &quot;unlink(&#39;composer-setup.php&#39;);&quot;
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
