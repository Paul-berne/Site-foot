<?php

class Router {
 	private array $routes;

    	public function __construct() {
        		$this->routes=[];
    	}


    
    
    // Ajoute une route au routeur
    public function addRoute($url, $controllerFile) {
        $this->routes[$url] = $controllerFile;
    }

    // Traite la demande actuelle
    public function execute($url) {
        if (array_key_exists($url, $this->routes)) {
            $controllerFile = $this->routes[$url];
            if (file_exists($controllerFile)) {
                include_once($controllerFile);
            } else {
                echo "Erreur : Contrôleur non trouvé";
            }
        } else {
            echo "Page non trouvée (Erreur 404)";
        }
    }
}