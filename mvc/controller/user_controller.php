
<?php
require_once("./Model/dbconfig.php");
class user_controller{
    private $db;
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->listuser();
        }
    }
    function listuser(){
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }
        $table = 'user';
        $data = $this->db->phantrang($table,$trang);
        // $table = 'user';
        // $data = $this->db->getAllData($table);
        require_once('view/admin/user/user.php');
    }
    function deleteuser(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = "user";
            if($this->db->delete($table,$id)){
                header('location:index.php?controller=user&&action=listuser');
            }
        }
    }
    function info(){
        $id=$_SESSION['id'];
        $dataId=$this->db->getUserid($id);
        require_once('view/customer/info.php');
        if( isset($_POST['edit_user']) ){
            $id=$_SESSION['id'];
            $name = $_POST['name']; 
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $adress = $_POST['adress'];
            $password = $_POST['password']; 
            $this->db->updateuser($id,$name,$phone,$email,$adress,$password);
            header('location:index.php?controller=user&&action=info');
        }
    }
}
?>

