<?php
require_once("./Model/dbconfig.php");
class admin_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->listAdmin();
        }
    }
    function listAdmin(){
        $data = $this->db->getAdmin();
        require_once('view/admin/admin/admin.php');
    }
    function add_admin(){
        if(isset($_POST['add_admin'])){
            $created_at  = date('Y-m-d H:s:i');
            $name = $_POST['username'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $adress = $_POST['adress'];
            if($this->db->insertUseradmin($name,$password,$phone,$email,$adress,$created_at)){
               $this->listAdmin();
           }
           
        }
        require_once('view/admin/admin/add_admin.php');
        exit();
    }
    function edit_admin(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "admin";
            $dataId = $this->db->getDataId($table,$id);

            if( isset($_POST['edit_admin']) ){
                $name = $_POST['name'];  
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($this->db->updateadmin($table,$id,$name,$username,$password)){
                    header('location:index.php?controller=admin&&action=listAdmin');
                }   
            }
        }
        require_once('view/admin/admin/edit_admin.php');
        exit();
    }
    function deleteadmin(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "user";
            if($this->db->delete($table,$id)){
                header('location:index.php?controller=admin&&action=listAdmin');
            }
        }
        exit();
    }
}
?>

