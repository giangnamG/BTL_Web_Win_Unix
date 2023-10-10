<?php 
namespace controllers\user;

use middleware\auth;
use config\view;
use database\core\DB;

class profileController{

    public function __construct(){
        auth::auth();
    }

    public function show(){
        $user = DB::select("*","users",[
            ['username','=',$_SESSION['username']]
        ],null)[0];
        view::view('user/profile.twig.php',[
            'permistion'=>$_SESSION['logged'],
            'username'=>$_SESSION['username'],
            'user' => $user,
        ]);
        
        die();
    }
    public function uploadfile(){
        if(isset($_FILES['avatar'])){
            $avatar = $_FILES['avatar'];
            // echo 'filename: '.basename($avatar['name']).'<br>';
            $target_dir = getcwd().'/templates/assets/avatar/';
            if ($avatar['size'] <= 5000000){

                list($width, $height, $type, $attr) = getimagesize($avatar['tmp_name']);

                $accept_ext = array(IMAGETYPE_GIF,IMAGETYPE_JPEG,IMAGETYPE_PNG);
                if (in_array($type,$accept_ext)){
                    $accept_mime = array('image/jpeg', 'image/png', 'image/gif');
                    $file_type = $avatar['type'];
                    if (in_array($file_type,$accept_mime)){                 
                        $target_dir .= basename($avatar['name']);
                        if (!file_exists($target_dir)){
                            if (is_uploaded_file($avatar['tmp_name'])){
                                if (move_uploaded_file($avatar['tmp_name'],$target_dir)){
                                    echo 'upload thanh cong';
                                }else
                                    echo ("upload Không thành công");
                            }else
                                echo ("Some thing went wrong !!");
                        }else
                            echo ("file đã tồn tại");    
                    }else
                        echo ("chỉ chấp nhận file: image/jpeg, image/png, image/gif");
                }else
                    echo ("Chỉ chấp nhận extension: png, jpg, gif");
            }else
                echo ('Chỉ chấp nhận file < 5MB');
        }
    }
    public function store(){
        $is_upload = 0;
        if (isset($_FILES['avatar']) && $_FILES['avatar']['name']!=''){
            $is_upload = 1;
            self::uploadfile();
        }

        if ($is_upload === 1){
            DB::update("users",
                [
                    ['fullname','=',$_POST['fullname']],
                    ['phone','=',$_POST['phone']],
                    ['email','=',$_POST['email']],
                    ['avatar','=','/templates/assets/avatar/'.basename($_FILES['avatar']['name'])],
                    ['Updated','=',date('Y-m-d H:i:s')]
                ],
                [
                    ['username','=',$_SESSION['username']]
                ],
                'and'
            );
        }else if ($is_upload === 0){
            DB::update("users",
                [
                    ['fullname','=',$_POST['fullname']],
                    ['phone','=',$_POST['phone']],
                    ['email','=',$_POST['email']],
                    ['Updated','=',date('Y-m-d H:i:s')]
                ],
                [
                    ['username','=',$_SESSION['username']]
                ],
                'and'
            );
        }
        echo '<script>window.location="/user/profile"</script>';
        die();
    }

}

?>