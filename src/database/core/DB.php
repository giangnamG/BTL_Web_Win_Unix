<?php
namespace database\core;
use config\core;
use PDO;
use PDOException;
use models\users;

class DB{
    public static function connect()
    {
        $config = core::db();
        extract($config);
        ['host' => $host,'db_name'=>$db_name,'username'=>$username,'password'=>$password,'driver'=>$driver] = $config;
        try{
            $pdo = new PDO("$driver:host=$host;dbname=$db_name", $username, $password);
            if(core::$env == 'dev')
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e)
        {
            die("Connection failed: " . $e->getMessage()); 
        }
    }
    public static function select_db($conn)
    {
        try{
            $db_name = core::db()['name'];
            $conn->exec("use $db_name");
        }catch(PDOException $e)
        {
            die("Connection failed: " . $e->getMessage()); 
        }
    }

    public static function select($selector, $table, $where, $logic) {
        if ($selector === '*') {
            $parameter = "*";
        } else {
            $parameter = implode(', ', $selector);
        }
    
        $sql = "select $parameter from $table where ";
    
        if (!empty($where)) {
            $arguments = [];
            $i = 1;
    
            foreach ($where as $params) {
                $query = $params[0];
    
                if ($params[1] === "=") {
                    $query .= " = :$params[0]";
                }
    
                $sql .= $query;
    
                if ($i < count($where)) {
                    $sql .= " $logic ";
                }
    
                $arguments[":$params[0]"] = $params[2];
                $i++;

            }
            try {
                $conn = DB::connect();
                self::select_db($conn);
                $stmt = $conn->prepare($sql);
                $stmt->execute($arguments);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
    }
    
    public static function search($tableName, $args) {
        $conn = db::connect();
        db::select_db($conn);

        $columnName = $args[0];
        $value      = $args[2];
        $sql = "select * from $tableName where $columnName like '%$value%'";

        try {
            $stmt = $conn->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $result;
        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            http_response_code(500);
            die();
        }
    }
    public static function selectAll($selector, $table) {
        if ($selector === '*') {
            $parameter = "*";
        } else {
            $parameter = implode(', ', $selector);
        }
    
        $sql = "select $parameter from $table";
        try {
            $conn = DB::connect();
            self::select_db($conn);
            $stmt = $conn->query($sql);
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public static function insert ($tableName, $data)
    {
        $conn = self::connect();
        self::select_db($conn);

        $model = "models\\".$tableName;
        $filable = $model::filable();

        // var_dump($filable);

        $columns = implode('`,`', $filable); // Chuyển danh sách các trường thành chuỗi
        $data = implode('\',\'',$data);

        $sql = "insert into $tableName (`$columns`) values ('$data')";
        $sql = str_replace("`id`,","",$sql);
        echo $sql;
        
        try {
            $conn->exec($sql);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage()); 
        }
    }

    public static function update($table, $parameters,$where, $logic)
    {
        $sql = "update $table set ";
        $cnt = count($parameters);
        $i = 1;
        $args = [];

        foreach( $parameters as $arg)
        {
            $q = $arg[0]." = :".$arg[0];
            $args[":$arg[0]"] = $arg[2];
            
            if($i < $cnt)
                $q .= ', ';
            $sql .= $q;  
            $i++;
        }

        $sql .= " where ";
        $i = 1;
        $cnt = count($where);
        foreach( $where as $arg)
        {
            $q = $arg[0]." = :".$arg[0];
            $args[":$arg[0]"] = $arg[2];
            $sql .= $q;  
            if($logic != '' && $i < $cnt){
                $sql .= " ".$logic." ";
            }
            $i++;
        }

        try{
            $conn = DB::connect();
            self::select_db($conn);
            $stmt = $conn->prepare($sql);
            $stmt->execute($args);
        }catch(PDOException $e){
            die("Connection failed: " . $e->getMessage()); 
        }
    } 

    public static function delete($table,$where){
        $sql = "delete from $table where ";
        $args = [];
        $i = 1;
        $cnt = count($where);
        foreach( $where as $arg)
        {
            $q = $arg[0]." = :".$arg[0];
            $args[":$arg[0]"] = $arg[2];
            $sql .= $q;  
            if($logic != '' && $i < $cnt){
                $sql .= " ".$logic." ";
            }
            $i++;
        }
        try{
            $conn = DB::connect();
            self::select_db($conn);
            $stmt = $conn->prepare($sql);
            $stmt->execute($args);
        }catch(PDOExecption $e){
            die("Connection failed: " . $e->getMessage()); 
        }

    }
}

?>