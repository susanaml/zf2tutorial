Tutorial ZF2
=======================

Introducción
------------
Tutorial para aprender el nuevo ZF2, para poder seguirlo ir a la siguiente dirección
http://framework.zend.com/manual/current/en/in-depth-guide/first-module.html

Instalación
------------
Instalar la estructura vacía de un proyecto ZF2, hay varias posibilidades de hacerlo:


Utilizando Composer (mejor método)
----------------------------
    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project -sdev --repository-url="https://packages.zendframework.com" zendframework/skeleton-application path/to/install

Otra alternativa, utilizando `composer` sería
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/zendframework/ZendSkeletonApplication.git
    cd ZendSkeletonApplication
    php composer.phar self-update
    php composer.phar install


Configurar Apache
-----------------

### Apache Setup

Añadir en un fichero en /etc/apache2/sites-available y activar el site

    <VirtualHost *:80>
        ServerName zf2-tutorial.localhost
        DocumentRoot /path/to/zf2-tutorial/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/zf2-tutorial/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
