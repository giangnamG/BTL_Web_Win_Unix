<?php 
namespace database\seed;

use database\seed\users;
use database\seed\products;

class registerSeed{

    public static function up(){
        users::init();
        products::init();
    }
}
?>