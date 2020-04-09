# Contax


## Installation

    composer require tarsoft/contax:dev-master  
    
    update config/app.php
    /*
    * Package Service Providers...
    */
        Tarsoft\Contax\ContaxServiceProvider::class,
            
    Remove route '/' on web.php

    php artisan migrate
    
    
