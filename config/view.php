<?php

namespace config;
require_once 'vendor/autoload.php';

class view{

    public static function view($filename,$data){
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load($filename);
        echo $template->render($data);
    }
}

?>