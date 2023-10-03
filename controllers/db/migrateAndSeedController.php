<?php 
namespace controllers\db;

use database\migrate\registerMigrate;
use database\seed\registerSeed;

class migrateAndSeedController{

    public static function index(){
        registerMigrate::up();
        registerSeed::up();

    }
}

?>