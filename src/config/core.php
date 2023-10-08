<?php 
namespace config;

class core{
    public static $env = 'dev';
    
    public static function init(){
        if(self::$env === 'dev'){
            error_reporting(1);
            ini_set('display_errors',1);
            // set_error_handler()
        }
    }
    public static function db(){
        return [
                'host' => 'db',
                'name' => 'window_unix',
                'username' => 'ngn',
                'password' => 'ngn',
                'driver' => 'mysql'
        ];
    }
}


?>