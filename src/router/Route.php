<?php 

namespace router;

use config\view;

class Route{
    protected static $routes = [
        '/' => 1,
        'home' => 1,
        'category' => 1,
        'all' => 1,
        'women' => 1,
        'men' => 1,
        'accessories' => 1,
        'search' => 1,
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
        'profile' => 1,
        'edit' => 1,
        'update' => 1,
        'store' => 1,
        'delete' => 1,
        'changePermistion' => 1,
        'product' => 1,
        'create' => 1,
    ];
    public static $current_uri;
    public static $current_method;

    public static function Route()
    {
        Route::$current_method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if($uri === '/')
        {
            header('location: /login');
            die();
        }

        Route::$current_uri = $uri;
        $uriParts = explode('/',$uri);

        foreach( $uriParts as $uriPart )
            if( $uriPart!=="" && !Route::$routes[$uriPart]){
                self::page404();
            }
        $length = count($uriParts);
        for ($i = 0; $i < $length; $i++){
            for ($j = $i + 1; $j < $length; $j++){
                if ($uriParts[$i] == $uriParts[$j]){
                    unset($uriParts[$j]);
                }
            }
        }
        Route::$current_uri = implode("/",$uriParts);
    }
    public static function get($path, $router)
    {
        if (Route::$current_method !== 'GET')
            return null;
        if(Route::$current_uri === $path){
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
        if (Route::$current_method !== 'POST')
            return null;
            
        if(Route::$current_uri === $path){
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
        view::view('404.twig.php',[]);
        die();
    }
}
?>