<?php 
namespace controllers\admin;

use middleware\auth;
use config\view;
use database\core\DB;

class homeAdminController{

    public function __construct(){
        auth::auth();
    }

    public function index(){
        $permistion = $_SESSION['logged'];
        view::view('admin/adminHome.twig.php',['permistion'=>$permistion]);
    }

}

?>