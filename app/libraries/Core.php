<?php
/**
 * De Core class is de ruggegraat en meest belangrijke
 * class van het mvc-framework
 */
class Core 
{
    // In de variabele $currentController stoppen we de naam van de controller
    protected $currentController = 'Homepages';

    // In de variabele $currentMethod stoppen we de naam van de method in de controllerclass
    protected $currentMethod = 'index';

    // In de variabele $params slaan we alle parameters op van de method
    protected $params = [];

    public function __construct()
    {
        /**
         * Roep de functie getURL() aan om de url in een array te zetten
         */
        $url = $this->getURL();
        
        /**
         * Check of de controllerclass bestaat
         */
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

            /**
             * Stop de naam van de controller in $this->currentController
             */
            $this->currentController = ucwords($url[0]);

            /**
             * Haal de naam van de controller uit het $url array
             */
            unset($url[0]);
        }

        /**
         * Sluit de controller class in en maak deze beschikbaar om een object van te maken
         */
        require_once '../app/controllers/' . $this->currentController . '.php';

        /**
         * Maak een nieuw object van de controllerclass
         */
        $this->currentController = new $this->currentController();

        /**
         * Check of de method (tweede woord in de URL) bestaat in de controllerclass
         */
        if (method_exists($this->currentController, $url[1])) {

            /**
             * Bewaar de naam van de method in $this->currentMethod
             */
            $this->currentMethod = $url[1];

            /**
             * Verwijder de naam van de method uit het array $url
             */
            unset($url[1]);
        }

        /**
         * Als $url bestaat en niet null worden de waarden daarvan
         * in het array $this->params gezet. Anders wordt er een leeg
         * array in $this->params gezet. Dit is een ternary operator
         */
        $this->params = $url ? array_values($url): [];

        /**
         * Roep de method met alle parameters aan van de class 
         */
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }


    public function getURL()
    {
        if (isset($_GET['url'])) {

            // Haal de forward-slash vooraan de url eraf
            $url = rtrim($_GET['url'], '/');

            // Maak de url schoon van html-tags, double-quotes, enz...
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Zet de string gescheiden door een / in een array
            $url = explode('/', $url);

        } else {

            /**
             * Wanneer er niets achter de vhost-naam wordt gezet
             * dan wordt het onderstaande array in $url gezet
             */
            $url = array('homepages', 'index');
        }
        return $url;
    }
}