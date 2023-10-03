<?php 
namespace database\seed;

use database\core\DB;

class users{

    public static function init(){
        DB::insert('users',[
            'username' => 'admin',
            'password' => base64_encode('admin'),
            'phone' => '0367438167',
            'email' => 'kow.giangnam@gmail.com',
            'role' => 'admin',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user1',
            'password' => base64_encode('user1'),
            'phone' => '0367438167',
            'email' => 'user1@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);

        DB::insert('users',[
            'username' => 'user2',
            'password' => base64_encode('user2'),
            'phone' => '0367438167',
            'email' => 'user2@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user3',
            'password' => base64_encode('user3'),
            'phone' => '0367438167',
            'email' => 'user3@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user4',
            'password' => base64_encode('user4'),
            'phone' => '0367438167',
            'email' => 'user4@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user5',
            'password' => base64_encode('user5'),
            'phone' => '0367438167',
            'email' => 'user5@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user6',
            'password' => base64_encode('user6'),
            'phone' => '0367438167',
            'email' => 'user6@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user7',
            'password' => base64_encode('user7'),
            'phone' => '0367438167',
            'email' => 'user7@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user8',
            'password' => base64_encode('user8'),
            'phone' => '0367438167',
            'email' => 'user8@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user9',
            'password' => base64_encode('user9'),
            'phone' => '0367438167',
            'email' => 'user9@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user10',
            'password' => base64_encode('user10'),
            'phone' => '0367438167',
            'email' => 'user10@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user11',
            'password' => base64_encode('user11'),
            'phone' => '0367438167',
            'email' => 'user11@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user12',
            'password' => base64_encode('user12'),
            'phone' => '0367438167',
            'email' => 'user12@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user13',
            'password' => base64_encode('user13'),
            'phone' => '0367438167',
            'email' => 'user13@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user14',
            'password' => base64_encode('user14'),
            'phone' => '0367438167',
            'email' => 'user14@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
        DB::insert('users',[
            'username' => 'user15',
            'password' => base64_encode('user15'),
            'phone' => '0367438167',
            'email' => 'user15@gmail.com',
            'role' => 'user',
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        ]);
    }
}

?>