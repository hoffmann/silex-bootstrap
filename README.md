silex-bootstrap
===============

Silex Skeleton with twig, doctrine, monolog and bootstrap


composer.json
-------------
Requirements for silex, twig, doctrine and monolog

* https://github.com/igorw/ConfigServiceProvider

* [FormServiceProvider][form]

[form]: http://silex.sensiolabs.org/doc/providers/form.html

public/.htaccess
----------------
Rewrite Rule and set APP_ENV

    SetEnv APP_ENV dev

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} -s [OR]
    RewriteCond %{REQUEST_FILENAME} -l [OR]
    RewriteCond %{REQUEST_FILENAME} -d
    RewriteRule ^.*$ - [NC,L]
    RewriteRule ^.*$ index.php [NC,L]

Error Handling
--------------
Debug Error handling is enabeld with an environment variable. You can set it
in `.htaccess` or in your apache config.

    $app["debug"] = getenv('APP_ENV') === 'dev';


    if ($app["debug"]){
        ini_set('display_errors', 1);
        error_reporting(-1);
        ErrorHandler::register();
        if ('cli' !== php_sapi_name()) {
            ExceptionHandler::register();
        }
    } else {
        ini_set('display_errors', 0);
    }

`$app["debug"]` is used to configure the `monolog` logging level to `DEBUG` or `WARNING`
