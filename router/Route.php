<?php 

namespace router;


class Route{
    protected static $routes = [
        '/' => 1,
        'home' => 1,
        'category' => 1,
        'all' => 1,
        'women' => 1,
        'men' => 1,
        'accessories' => 1,
        'migrate' => 1,
        'seed' => 1,
        'migrateAndSeed' => 1,
        'login' => 1,
        'logout' => 1,
        'register' => 1,
        'admin' => 1,
        'users' => 1,
        'products' => 1,
        'user' => 1,
        'edit' => 1,
        'update' => 1,
        'store' => 1,
        'delete' => 1,
        'changePermistion' => 1,
    ];
    public static $current_uri;
    public static $current_method;

    public static function Route()
    {
        self::$current_method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        self::$current_uri = $uri;
        $uriParts = explode('/',$uri);

        foreach( $uriParts as $uriPart )
            if( $uriPart!=="" && !self::$routes[$uriPart]){
                self::page404();
            }
    }
    public static function get($path, $router)
    {
        if (self::$current_method !== 'GET')
            return null;
        if(self::$current_uri === $path){
            list($controllerName, $method) = explode('@', $router);
            
            $controllerPath = __DIR__.'/../'.str_replace('\\','/',$controllerName).'.php';

            if( file_exists($controllerPath))
            {
                $controllerNameParts = explode('/', $controllerName);
                $className = end($controllerNameParts);
                require($controllerPath);
                $controller = new $controllerName();
                $controller->$method();

            }else{
                echo 'not found '.$controllerPath;
            }
        }
    }

    public static function post($path, $router){
        if (self::$current_method !== 'POST')
            return null;
        if(self::$current_uri === $path){
            list($controllerName, $method) = explode('@', $router);
            $controllerPath = __DIR__.'/../'.str_replace('\\','/',$controllerName).'.php';
            if( file_exists($controllerPath)){
                $controllerNameParts = explode('/', $controllerName);
                $className = end($controllerNameParts);
                require($controllerPath);
                $controller = new $controllerName();
                $controller->$method();
            }else{
                echo 'not found '.$controllerPath;
            }
        }

    }

    public static function page404(){
        echo 'page not found';
        die();
    }
}
?>