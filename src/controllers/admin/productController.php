<?php 
namespace controllers\admin;

use middleware\auth;
use database\core\DB;
use config\view;


class productController{

    public function __construct(){
        auth::auth();
    }

    public function index(){
        $products = DB::selectAll("*","products");
        view::view('admin/productsView.twig.php',
            [
                'products' => $products,
                'permistion' => $_SESSION['logged'],
                'total' => count($products),
            ]);
    }

    public function create(){
        view::view('admin/addProduct.twig.php',[
            'permistion' => $_SESSION['logged']
        ]);
    }

    public function store(){
        if (isset($_POST['submit'])){
            $product['title'] = trim($_POST['title']," ");
            $product['category'] = trim($_POST['category']," "); 
            $product['provider'] = trim($_POST['provider']," ");
            $product['buy'] = $_POST['buy'];
            $product['sell'] = $_POST['sell'];
            $product['quantity'] = $_POST['quantity'];
            $product['image'] = 'images/'.self::upload_file();
            
            DB::insert("products",
                [
                  'title' => $product['title'],
                  'category' => $product['category'],
                  'don_gia_nhap' => $product['buy'],
                  'don_gia_ban' => $product['sell'],
                  'image' => $product['image'],
                  'nha_cung_cap' => $product['provider'],
                  'quantity' => $product['quantity'],
                ]);
            die('<script>window.location="/admin/products/create"</script>');
        }
    }

    function upload_file(){
        $targetDirectory = getcwd()."/templates/assets/images/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($_FILES["image"]["size"] > 5000000) {
            echo '<br>'."Tệp quá lớn.";
            $uploadOk = 0;
        }
        // Cho phép chỉ định các loại tệp được tải lên (ví dụ: chỉ cho phép các tệp hình ảnh)
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo '<br>'."Chỉ chấp nhận các tệp hình ảnh JPG, JPEG, PNG, GIF.";
            $uploadOk = 0;
        }

        // Kiểm tra xem có lỗi nào không
        if ($uploadOk == 0) {
            echo '<br>'."Tệp của bạn không được tải lên.";
        } else {
            $upload_dir = getcwd() . '/templates/assets/images/';
            echo $upload_dir;
                // do upload logic here
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                return basename($_FILES["image"]["name"]);
            } else {
                echo '<br>'."Có lỗi xảy ra khi tải lên tệp: ".htmlspecialchars(basename($_FILES["image"]["name"]));
            }
        }
        die();
    }
}

?>