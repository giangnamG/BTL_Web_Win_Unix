<?php 

namespace models;

class users{
    public static function filable(){
        return [
            'id',
            'username',
            'password',
            'phone',
            'email',
            'role',
            'created',
            'updated'
        ];
    }
}

?>