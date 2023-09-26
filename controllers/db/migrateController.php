<?php 
namespace controllers\db;

use database\migrate\registerMigrate;

class migrateController{

    public function index(){
        registerMigrate::up();
    }
}

?>