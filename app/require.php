<?php
    /**
     * We includen hier alle libraries die we nodig hebben
     * voor het mvc-framework
     */
    require_once 'libraries/Core.php';
    require_once 'libraries/BaseController.php';
    require_once 'libraries/Database.php';
    require_once 'config/config.php';
    
    /**
     * Maak een instantie of object van de Core-Class
     */
    $init = new Core();
