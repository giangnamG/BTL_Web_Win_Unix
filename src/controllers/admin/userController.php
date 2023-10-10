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
                DB::update("users",
                    [
                        ['phone','=',$phone],
                        ['email','=',$email]
                    ],
                    [
                        ['id','=',$user_id]
                    ],
                    'and'
                );
                die('<script>window.location="/admin/user/edit"</script>');
            }
        }
    }

    public function changePermistion(){
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $user_id = $_POST['user_id'];
            $new_role = $_POST['change_role'];
            
            DB::update("users",
            [
                ['role','=',$new_role]
            ],
            [
                ['id','=',$user_id]
            ],
            null);
            die('<script>window.location="/admin/users"</script>');
        }
    }
    public function delete(){
        DB::delete("users", [
            ['id','=',$_POST['user_id']]
        ]);
        die('<script>window.location="/admin/users"</script>');
    }
}

?>
