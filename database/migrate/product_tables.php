<?php 
namespace database\migrate;

use config\core;
use database\core\DB;
use PDOException;

class product_tables{

    public static function init(){
        $conn = DB::connect();
        DB::select_db($conn);

        $sql = "DROP TABLE IF EXISTS products";
        $conn->exec($sql);

        $sql = "CREATE TABLE IF NOT EXISTS `products` (
            id INT PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            category VARCHAR(255) NOT NULL,
            don_gia_nhap DECIMAL(10, 2) NOT NULL,
            don_gia_ban DECIMAL(10, 2) NOT NULL,
            image VARCHAR(255),
            nha_cung_cap VARCHAR(55) NOT NULL,
            quantity DECIMAL(10, 0) NOT NULL
        )";

        try {
            $conn->exec($sql);
            echo "Table 'products' created successfully.<br>";
        } catch (PDOException $e) {
            die("Error creating table: " . $e->getMessage());
        }
        $conn = null;
    }
}

?>