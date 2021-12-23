<?php
require_once("./Model/dbconfig.php");
class category_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->listCategory();
        }
    }
    function listCategory(){
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }
        $table = 'category';
        $data = $this->db->phantrang($table,$trang);
        require_once('view/admin/category/category.php');
    }
    function add_category(){
        if(isset($_POST['add_category'])){
            $created_at = $updated_at = date('Y-m-d H:s:i');
            $name = $_POST['name'];
           if($this->db->insertCategory($name,$created_at,$updated_at)){
               header('location:index.php?controller=category&&action=listCategory');
           }
           
        }

        require_once('view/admin/category/add_category.php');
        exit();
    }
    function edit_category(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "category";
            $dataId = $this->db->getDataId($table,$id);

            if( isset($_POST['edit_category']) ){
                $updated_at = date('Y-m-d H:s:i');
                $name = $_POST['name'];  
                if($this->db->update($table,$id,$name,$updated_at)){
                    header('location:index.php?controller=category&&action=listCategory');
                }   
            }
        }
        require_once('view/admin/category/edit_category.php');
        exit();
    }
    function deleteCategory(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "category";
            if($this->db->delete($table,$id)){
                header('location:index.php?controller=category&&action=listCategory');
            }
        }
        exit();
    }
}
?>
