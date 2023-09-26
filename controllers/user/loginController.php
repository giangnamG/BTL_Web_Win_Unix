<?php 
namespace controllers\user;

use middleware\auth;
use database\core\DB;
use config\view;


class loginController{
    public function __construct(){
        
        if(auth::is_admin() || auth::is_staff() || auth::is_user())
        {
            header('location: /home');
            die();
        }
    }
    public function index(){
        view::view('login.twig.php',[]);
    }

    public function login(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $user = DB::select('*','users',$where=[['username','=',$username],['password','=',base64_encode($password)]],$type="and");
        if (count($user)){
            auth::set_logged($user[0]['role'],$user[0]['username']);
            header('location: /home');
            die();
        }else{
            echo '<script>alert("username or password is wrong !!!")</script>';
            header('location: /login');
            die();
        }
    }
}
?>