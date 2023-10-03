<?php
namespace middleware;

class auth {

    private static $admin = 0;
    private static $staff = 0;
    private static $user = 0;

    public static function set_logged($permission,$username)
    {
        $_SESSION['logged'] = $permission;
        $_SESSION['username'] = $username;
    }

    public static function auth()
    {
        self::checkLogged();
        if(!self::is_user() && !self::is_staff() && !self::is_admin()) {
            header('location: /login');
            die();
        }
        if(strpos(strtolower($_SERVER['REQUEST_URI']),"admin")){

            if(self::is_user())
            {
                header('location: /home');
                die();

            }else if(self::is_staff())
            {
                if(strpos(strtolower($_SERVER['REQUEST_URI']),"user"))
                {
                    $except = [
                        'edit',
                        'update',
                        'delete'
                    ];

                    foreach($except as $each)
                        if(strpos(strtolower($_SERVER['REQUEST_URI']),$each))
                        {   
                            header('location: /home/users');
                            die();
                        }
                }
            }
        }
    }

    public static function checkLogged()
    {
        if(isset($_SESSION['logged']))
        {
            if ($_SESSION['logged'] === 'user')
                self::$user = 1;
            else if($_SESSION['logged'] === 'staff')
                self::$staff = 1;
            else if($_SESSION['logged'] === 'admin')
                self::$admin = 1;
        }
    }

    public static function is_user()
    {
        self::checkLogged();
        if (self::$user == 1)
            return true;
        return false;
    }

    public static function is_staff()
    {
        self::checkLogged();
        if (self::$staff == 1)
            return true;
        return false;
    }

    public static function is_admin()
    {
        self::checkLogged();
        if (self::$admin == 1)
            return true;
        return false;
    }

    public static function logout()
    {
        session_destroy();
        self::$admin = 0;
        self::$staff = 0;
        self::$user = 0;
        header('location: /login');
    }
}

?>
