<?php 
namespace controllers\admin;

use middleware\auth;
use database\core\DB;
use config\view;
use router\Route;

class userController{


    public function __construct(){
        auth::auth();
    }

    public function index(){
        $users = DB::selectAll("*","users");
        $roles = [
            'admin',
            'staff',
            'user'
        ];
        view::view('admin/users.twig.php',[
            'users'=>$users,
            'current_user' => $_SESSION['username'],
            'permistion' => $_SESSION['logged'],
            'roles' => $roles
        ]);
    }

    public function show() {
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $_SESSION['edit_user_id'] = $_REQUEST['user_id'];
            header('location: /admin/user/edit');
            die();
        }
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $user_id = $_SESSION['edit_user_id'];

            $user = DB::select("*","users",
                    [
                        ['id','=',$user_id]
                    ]
                    ,null
                );
            view::view('admin/edit_user.twig.php',
                    [
                        'user'=>$user[0],
                        'permistion' => $_SESSION['logged'],
                    ]);
        }
    }

    public function update(){
        if ($_SERVER['REQUEST_METHOD']==="POST")
        {
            if(isset($_POST['submit']))
            {
                $user_id = $_SESSION['edit_user_id'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $check = DB::update("users",
                    [
                        ['phone','=',$phone],
                        ['email','=',$email]
                    ],
                    [
                        ['id','=',$user_id]
                    ],
                    'and'
                );
                if($check)
                {
                    header('location: /admin/user/edit');
                    die();
                }
            }
        }
    }

    public function changePermistion(){
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $user_id = $_POST['user_id'];
            $new_role = $_POST['change_role'];
            
            $check = DB::update("users",
            [
                ['role','=',$new_role]
            ],
            [
                ['id','=',$user_id]
            ],
            null);
            if($check){
                header('location: /admin/users');
                die();
            }
        }
    }
}

?>
