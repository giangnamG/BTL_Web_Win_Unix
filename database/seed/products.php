<?php 
namespace database\seed;

use database\core\DB;

class products{

    public static function init(){
        DB::insert('products',[
            'title' => 'Samsung CF591 Series Curved 27-Inch FHD Monitor',
            'category' => 'women',
            'don_gia_nhap' => 340,
            'don_gia_ban' => 670,
            'image' => 'images/product_1.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 34
        ]);
        DB::insert('products',[
            'title' => 'Blue Yeti USB Microphone Blackout Edition',
            'category' => 'women',
            'don_gia_nhap' => 390,
            'don_gia_ban' => 570,
            'image' => 'images/product_2.png',
            'nha_cung_cap' => 'Trần Đình Khải',
            'quantity' => 74
        ]);
        DB::insert('products',[
            'title' => 'Pryma Headphones, Rose Gold & Grey',
            'category' => 'women',
            'don_gia_nhap' => 350,
            'don_gia_ban' => 499,
            'image' => 'images/product_3.png',
            'nha_cung_cap' => 'Nguyễn Hải Anh',
            'quantity' => 64
        ]);
        DB::insert('products',[
            'title' => 'Samsung CF591 Series Curved 27-Inch FHD Monitor',
            'category' => 'women',
            'don_gia_nhap' => 199,
            'don_gia_ban' => 399,
            'image' => 'images/product_4.png',
            'nha_cung_cap' => 'Nguyễn Hải Anh',
            'quantity' => 64
        ]);
        DB::insert('products',[
            'title' => 'DYMO LabelWriter 450 Turbo Thermal Label Printer',
            'category' => 'accessories',
            'don_gia_nhap' => 299,
            'don_gia_ban' => 599,
            'image' => 'images/product_5.png',
            'nha_cung_cap' => 'Nguyễn Đình Hải',
            'quantity' => 164
        ]);
        DB::insert('products',[
            'title' => 'Fujifilm X100T 16 MP Digital Camera (Silver)',
            'category' => 'accessories',
            'don_gia_nhap' => 199,
            'don_gia_ban' => 399,
            'image' => 'images/product_6.png',
            'nha_cung_cap' => 'Nguyễn Đình Hải',
            'quantity' => 16
        ]);
        DB::insert('products',[
            'title' => 'Blue Yeti USB Microphone Blackout Edition',
            'category' => 'accessories',
            'don_gia_nhap' => 269,
            'don_gia_ban' => 399,
            'image' => 'images/product_7.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 163
        ]);
        DB::insert('products',[
            'title' => 'Fujifilm X100T 16 MP Digital Camera (Silver)',
            'category' => 'men',
            'don_gia_nhap' => 269,
            'don_gia_ban' => 399,
            'image' => 'images/product_8.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 163
        ]);
        DB::insert('products',[
            'title' => 'Pryma Headphones, Rose Gold & Grey',
            'category' => 'men',
            'don_gia_nhap' => 269,
            'don_gia_ban' => 399,
            'image' => 'images/product_8.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 163
        ]);
        DB::insert('products',[
            'title' => 'DYMO LabelWriter 450 Turbo Thermal Label Printer',
            'category' => 'men',
            'don_gia_nhap' => 1269,
            'don_gia_ban' => 2399,
            'image' => 'images/product_9.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 163
        ]);
        DB::insert('products',[
            'title' => 'Pryma Headphones, Rose Gold & Grey',
            'category' => 'men',
            'don_gia_nhap' => 169,
            'don_gia_ban' => 239,
            'image' => 'images/product_10.png',
            'nha_cung_cap' => 'NGN',
            'quantity' => 163
        ]);
    }   
}