<?php 
namespace controllers\user;

use middleware\auth;

class logoutController{

    public function __construct(){
        auth::auth();
    }

    public function logout(){
        if(isset($_REQUEST['logout']) && $_REQUEST['logout'] === 'logout')
            auth::logout();
    }

}

?>