<?php
require_once("./Model/dbconfig.php");
class customer_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->listProductHome();
        }
    }
    function listProductHome(){
        $dataId = $this->db->getAllData("product");
        require_once('view/customer/home.php');
    }

    function listProduct(){
        $id = $_GET['id'];
        $dataId = $this->db->getList($id);
        require_once('view/customer/sanpham.php');
    }

    function chitiet_sp(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "product";
            $dataId = $this->db->getDataId($table,$id);
        }else{
            header('location:index.php?controller=customer&&action=listProduct');
        }
        $dataList = $this->db->getList($dataId['id_category']);
        require_once('view/customer/chitiet_sp.php');
    }
    function Search(){
        $id= filter_input(INPUT_GET,"id");
        $tukhoa = $_POST['tukhoa'];
        $table = "product";
        if(empty($id)){
            $dataId = $this->db->checkSearch("product",$tukhoa);
            if(mysqli_num_rows($dataId)>0){
                $dataId = $this->db->Search("product",$tukhoa);
                require_once('view/customer/home.php');
            }
            else{
                $msg="không tìm thấy loại hoa cần tìm";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                $this->listProductHome();
            }
        }
        else{
            $dataId = $this->db->checkSearchId("product",$tukhoa,$id);
            if(mysqli_num_rows($dataId)>0){
                $dataId = $this->db->SearchId("product",$tukhoa,$id);
                require_once('view/customer/sanpham.php');
            }
            else{
                $msg="không tìm thấy loại hoa cần tìm";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                $this->listProduct();
            }
        }
    }
}
?>
