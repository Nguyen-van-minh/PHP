<?php
require_once("./Model/dbconfig.php");
class product_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->listProduct();
        }
    }
    function listProduct(){
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }
        $data = $this->db->phantrangProduct($trang);
        require_once('view/admin/product/product.php');
    }
    function add_product(){
        $table = 'category';
        $data = $this->db->getAllData($table);
        if(isset($_POST['add_product'])){
            $created_at = $updated_at = date('Y-m-d H:s:i');
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $conten = $_POST['conten'];
            $id_category = $_POST['id_category'];      
            if($this->db->insertProduct($name,$price,$image,$conten,$id_category,$created_at,$updated_at)){
                header('location:index.php?controller=product&&action=listProduct');
           }         
        }
        require_once('view/admin/product/add_product.php');
        exit();
    }
    function edit_product(){
        $table = 'category';
        $data = $this->db->getAllData($table);
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "product";
            $dataId = $this->db->getDataId($table,$id);
            if(isset($_POST['edit_product'])){
                $updated_at = date('Y-m-d H:s:i');
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $conten = $_POST['conten'];
                $id_category = $_POST['id_category'];
                if($this->db->updateProduct($id,$name,$price,$image,$conten,$id_category,$updated_at)){
                    header('location:index.php?controller=product&&action=listProduct');
                }   
            }
        }
        require_once('view/admin/product/edit_product.php');
        exit();
    }
    function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "product";
            if($this->db->delete($table,$id)){
                header('location:index.php?controller=product&&action=listProduct');
            }
        }
        exit();
    }
}
?>
