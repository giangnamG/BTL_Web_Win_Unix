<?php 
namespace models;

class products{

    public static function filable(){
        return [
            'id',
            'title',
            'category',
            'don_gia_nhap',
            'don_gia_ban',
            'image',
            'nha_cung_cap',
            'quantity'
        ];
    }
}

?>