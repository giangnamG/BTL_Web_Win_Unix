<?php 
namespace controllers\user;

use middleware\auth;
use config\view;
use database\core\DB;


class homeController{

    public function __construct(){
        auth::auth();
    }

    public function index(){
        $products = DB::selectAll("*","products");
        view::view('user/home.twig.php',['permistion'=>$_SESSION['logged'],'username'=>$_SESSION['username'],'products'=>$products]);
    }
    public function category(){
        $uri = explode('/',$_SERVER['REQUEST_URI']);
        $category = end($uri);
        if($category === 'category' || $category === 'all')
        {
            $products = DB::selectAll("*","products");
            view::view('user/home.twig.php',['permistion'=>$_SESSION['logged'],'username'=>$_SESSION['username'],'products'=>$products]);
        
        }else if($category === 'men'){

            $products = DB::select("*","products",[['category','=','men']],null);
            view::view('user/home.twig.php',['permistion'=>$_SESSION['logged'],'username'=>$_SESSION['username'],'products'=>$products,'name_category'=>$category]);
        
        }else if($category === 'women'){
            
            $products = DB::select("*","products",[['category','=','women']],null);
            view::view('user/home.twig.php',['permistion'=>$_SESSION['logged'],'username'=>$_SESSION['username'],'products'=>$products,'name_category'=>$category]);
        
        }else if($category === 'accessories'){
            
            $products = DB::select("*","products",[['category','=','accessories']],null);
            view::view('user/home.twig.php',['permistion'=>$_SESSION['logged'],'username'=>$_SESSION['username'],'products'=>$products,'name_category'=>$category]);
        
        }
        die();
    }

    public function search(){
        if(isset($_POST['search'])){
            $search = $_POST['search'];
            $products = DB::search("products",['title','like',$search]);
            if($products){
                view::view('user/home.twig.php',
                    [
                        'permistion'=>$_SESSION['logged'],
                        'username'=>$_SESSION['username'],
                        'products'=>$products,
                        'name_category'=>null,
                        'search_name'=>$search
                    ]);
            }
            http_response_code(500);
        }
    }
}

?>