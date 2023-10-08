<?php 

namespace models;

class users{
    public static function filable(){
        return [
            'id',
            'fullname',
            'username',
            'password',
            'phone',
            'email',
            'role',
            'avatar',
            'created',
            'updated'
        ];
    }
}

?>