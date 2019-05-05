<?php

class Router {
    
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller){

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){

        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $resquestType)
    {
        if (array_key_exists($uri, $this->routes[$resquestType]))
        {
            return $this->routes[$resquestType][$uri];
        }

        throw new Exception('La ruta no esta definida por el URI');
    }
}

$router = new Router();

$router->get('register', 'controllers/register.php');