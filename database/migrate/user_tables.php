<?php
namespace database\migrate;

use config\core;
use database\core\DB;
use PDOException;

class user_tables{
    public static function init(){
        $conn = DB::connect();
        $databaseName = core::db()['name'];
        
        $sql = "USE $databaseName";

        $conn->exec($sql);
        $sql = "DROP TABLE IF EXISTS users";
        $conn->exec($sql);

        // Tạo bảng users
        $sql = "CREATE TABLE users (
            id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            role VARCHAR(7) NOT NULL,
            Created VARCHAR(30) NOT NULL,
            Updated VARCHAR(30) NOT NULL
        )";
        
        try {
            $conn->exec($sql);
            echo "Table 'users' created successfully.<br>";
        } catch (PDOException $e) {
            die("Error creating table: " . $e->getMessage());
        }
        $conn = null;
    }
}
?>
