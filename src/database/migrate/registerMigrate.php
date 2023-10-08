<?php 
namespace database\migrate;

use database\migrate\user_tables;
use database\migrate\product_tables;
class registerMigrate{

    public static function up(){
        user_tables::init();
        product_tables::init();
    }
}

?>