<?php 
class router{

    protected $routes;

    function define($routes){

        $this->routes= $routes;
    }

    function direct($uri){
        if(array_key_exists($uri,$this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception("Non ci sono route definite per questa uri");
    }
}