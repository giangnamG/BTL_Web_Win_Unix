<?php 
namespace controllers\db;

use database\seed\registerSeed;

class seedController{
    public static function index(){
        registerSeed::up();
    }
}
?>