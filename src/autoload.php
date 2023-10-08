<?php 

function autoload($className){
    $className = str_replace('\\','/',$className);
    $file = __DIR__.'/'.$className.'.php';
    if (file_exists($file)) {
        include_once $file;
    }
    
}
spl_autoload_register('autoload');
?>