<?php
require_once("./Model/dbconfig.php");
class login_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->dangnhap();
        }
    }
    function dangnhap(){
        if(isset($_POST['dangnhap'])&&$_POST['name']!=""&&$_POST['password']!=""){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $user = $this->db->kiemtradangnhap($name,$password);
            if(mysqli_num_rows($user)>0){
                session_start();
                $data=$this->db->getData();
                $_SESSION['name']=$data['username'];
                $_SESSION['id']=$data['id'];
                $_SESSION['permission']=$data['permission'];
                $_SESSION['start'] = time(); 
                $_SESSION['expire'] = $_SESSION['start'] + (30*60);
                header('location:index.php?controller=customer&&action=listProductHome');
            }
            else{
                header('location:index.php?controller=login&&action=dangnhap');
            }
        }
        require_once('view/login/dangnhap.php');
    }
    function dangky(){
        if(isset($_POST['add_user'])){
            $check=$this->db->checkUser($_POST['name']);
            if(mysqli_num_rows($check)==0){
                $created_at  = date('Y-m-d H:s:i');
                $name = $_POST['name'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $adress = $_POST['adress'];
                if($this->db->insertUser($name,$password,$phone,$email,$adress,$created_at)){
                    $this->dangnhap();
                }
            }
            else{
                $msg="tài khoản đã tồn tại vui lòng nhập tài khoản mới";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
           
        }
        require_once('view/login/dangky.php');
        exit();
    }
    function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['permission']);
        header('location:index.php?controller=customer&&action=listProductHome');
    }
    // function quenmk(){
    //     $to = "2k1anhdang19ta@gmail.com";
    //     $subject = "My subject";
    //     $txt = "Hello world!";
    //     $headers = "From: 2k1anhdang19ta@gmail.com";
    //     mail($to,$subject,$txt,$headers);
    //     if(mail($to,$subject,$txt,$headers)==true){
    //         echo"ok";
    //     }
    //     else{
    //         echo"not";
    //     }
    // }
    function quenmk(){
        if(isset($_POST['up_user'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $this->db->upUser($name,$password,$phone,$email);
            $check=$this->db->mkcheckUser($name,$password);
            if(mysqli_num_rows($check)!=0){
                $msg="lấy lại mật khẩu thành công";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                $this->dangnhap();
            }
            else{
                $msg="Sai thông tin xác minh";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }
        require_once('view/login/quenmk.php');
        exit();
    }
}
?>

