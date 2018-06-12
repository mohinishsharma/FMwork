<?php

class FM_Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = $GLOBALS["configs"]["routes"];
        $route = $this->findRoute();
        if(class_exists($route["controller"])){
            $controller = new $route["controller"]();
            if(method_exists($controller,$route["method"]))
            {
                $controller->$route["method"]();
            }
            else{
                FM_Error::show(404,array("Method doesn't exists in Controller => ".$route["method"]));
            }
        }
        else{
            FM_Error::show(404,array("Controller doesn't exists => ".$route["controller"]));
        }
    }

    private function routeParts($route)
    {
        if(is_array($route))
        {
            $route = $route["url"];
        }
        $parts = explode("/",$route);
        
        return $parts;
    }

    private static function uri($part)
    {
        $parts = explode("/",$_SERVER["REQUEST_URI"]);
        if($parts[0] == $GLOBALS["configs"]["paths"]["index"] || $parts[0] == "")
        {
            $part++;
        }
        return (isset($parts[$part]))?$parts[$part]:"";
    }

    private function findRoute()
    {
        foreach ($this->routes as $route => $value) {
            $parts = $this->routeParts($value);
            $matched = true;
            foreach ($parts as $key => $value) {
                
                if($value != "*")
                {
                    if(FM_Router::uri($key) != $value)
                    {
                        $matched = false;
                    }
                }
            }
            if($matched)
            {
                return $route;
            }
        }
        $uri_1 = FM_Router::uri(1);
        $uri_2 = FM_Router::uri(2);
        if($uri_1 == "")
        {
            $uri_1 = $GLOBALS["configs"]["defaults"]["controller"];
        }
        if($uri_2 == "")
        {
            $uri_2 = $GLOBALS["configs"]["defaults"]["method"];
        }
        $route = array(
            "controller" => $uri_1,
            "method" => $uri_2
        );
        return $route;
    }

    
}

?>