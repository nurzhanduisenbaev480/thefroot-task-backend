<?php

class Router
{
    private $routes = [];
    public function __construct()
    {
        $routesPath = ROOT . '/config/route.php';
        $this->routes = include $routesPath;
    }
    private function getUri(){
        $requestUri = $_SERVER['REQUEST_URI'];
        if (!empty($requestUri)){
            return trim($requestUri, '/');
        }
    }
    public function run(){
        $uri = $this->getUri();
        foreach ($this->routes as $pattern => $path){
            //echo $pattern . " => ".$path."<br>";
            if (preg_match("~$pattern~", $uri)){
                $contains = explode('/', $path);
                $controller = ucfirst($contains[0]).'Controller';
                $action = 'action'.ucfirst($contains[1]);

                $controllerFile = ROOT . '/engine/controllers/'.$controller.'.php';

                if (file_exists($controllerFile)){
                    include_once $controllerFile;
                }

                $controllerObject = new $controller;
                $objectAction = $controllerObject->$action();

                if ($objectAction != null){
                    break;
                }
            }
        }
    }
}