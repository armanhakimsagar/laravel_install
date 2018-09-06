Command line :

* composer         (for check)

* composer update : download lastest versions of available packages based on composer.json

* composer dump-autoload : regenerates the list of all classes

* shift + right click for cmd open

* cd C:\xampp\htdocs     (Change directory same driver: 
                         just cd then path)

* cd /d E:\full_bitopew  (cd then /d the path change 
                         directory with other driver)

* cd \                  (go root)

* cd ..\		(go back)

* cd foldername\	(access)




Installation rules :


-> download latest version of xampp for latest php version


-> https://getcomposer.org/ its a dependency manager of php


-> download composer from getcomposer.com


-> install location must be xampp\php\php.exe


-> composer global require "laravel/installer"


-> composer create-project --prefer-dist laravel/laravel blog


-> hit localhost/projectname/public


->  localhost :

    * cut .htacess file from public and paste 
  
    * into root & make server.php to index.php

    live server :

    * move public into root.

    * index.php

      require __DIR__.'/../project_name/vendor/autoload.php'; 

      $app = require_once __DIR__.'/../project_name/bootstrap/app.php';

    * update php version




-> laravel new blog (for new project)


-> php artisan (it will show all commad)


-> php artisan --version (show verison)


-> php artisan env      (show current environment)


-> php artisan route:cache    Create a route cache file for faster route registration


-> php artisan route:clear


-> php artisan down (Maintenance Mode)


-> customizedown maintenance mode template location 

   storage/framework/views
   

-> php artisan up
 
 
-> php artisan serve          (http://localhost:8000/)


-> php artisan config:cache   

  (To give your application a speed boost, 
   you should cache all of your configuration files,
   The command should not be run during local development)


-> php artisan route:list


-> php artisan view:clear     

  (remove all complied error view in storage/framework/views & 404 error)
