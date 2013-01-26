silex-bootstrap
===============

Silex Skeleton with twig, doctrine, monolog and bootstrap


composer.json
-------------
Requirements for silex, twig, doctrine and monolog

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
