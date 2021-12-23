
<?php
require_once("./Model/dbconfig.php");
class order_controller{
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
            $this->showOrder();
        }
    }
    function listOder()
    {
        $_SESSION['action']='listOder';
        if(isset($_SESSION['id'])){
            $dataId = $this->db->checkallOrder();
            if(mysqli_num_rows($dataId)>0){
                $user_id=$_SESSION['id'];
                if(!isset($_GET['trang'])){
                    $trang = 1;
                }
                else{
                    $trang = $_GET['trang'];
                }              
                $data = $this->db->phantrangOrder($trang);
            }
            require_once('view/admin/order.php');
        }
        else{
            header('location:index.php?controller=login&action=dangnhap');
        }
    }
    // function listOder()
    // {
    //     if(isset($_SESSION['id'])){
    //         $dataId = $this->db->checkallOrder();
    //         if(mysqli_num_rows($dataId)>0){
    //             $user_id=$_SESSION['id'];
    //             $data = $this->db->getAllOrder("order");
    //         }
    //         require_once('view/admin/order.php');
    //     }
    //     else{
    //         header('location:index.php?controller=login&action=dangnhap');
    //     }
    // }
    function showOrder(){
        if(isset($_SESSION['id'])){
            $dataId = $this->db->checkOrder($_SESSION['id']);
            if(mysqli_num_rows($dataId)>0){
                $user_id=$_SESSION['id'];
                $data = $this->db->getOrder($user_id);
            }
            require_once('view/customer/view_order.php');
        }
        else{
            header('location:index.php?controller=login&action=dangnhap');
        }
    }
    
    public function order(){
        if(isset($_SESSION['id'])){
            $user_id=$_SESSION['id'];
            $created_at = $updated_at = date('Y-m-d H:s:i');
            $dataId = $this->db->getCart($user_id);
            foreach ($dataId as $value) {
                $product_id=$value['product_id'];
                $qty=$value['quantity'];
                $total=$value['quantity']*$value['price'];
                $this->db->order($user_id,$product_id,$qty,$total,$created_at);
            }
                $this->deleteAll();
        }
        else{
            header('location:index.php?controller=login&action=dangnhap');
        }
        
    }
    function delete(){
        $id = $_GET['id'];                   
        $this->db->delete("order",$id);
        $this->showOrder();
    }
    function deleteAll(){
        $id = $_SESSION['id'];                   
        $this->db->deleteCartAll("cart",$id);
        header('location:index.php?controller=cart');
    }
    function duyet(){
        $id = $_GET['id'];                   
        $this->db->duyet("2",$id);
        header('location:index.php?controller=order&&action=listOder');
    }
    function huy(){
        $id = $_GET['id'];                   
        $this->db->duyet("1",$id);
        header('location:index.php?controller=order&&action=listOder');
    }
    function duyet1(){  
        $_SESSION['action']='duyet1';
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }              
        $dataId = $this->db->checkallOrder();                
        $data=$this->db->find($trang,0);
        require_once('view/admin/order.php');
    }
    function duyet2(){  
        $_SESSION['action']='duyet2';
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }              
        $dataId = $this->db->checkallOrder();                
        $data=$this->db->find($trang,2);
        require_once('view/admin/order.php');
    }
    function duyet3(){  
        $_SESSION['action']='duyet3';
        if(!isset($_GET['trang'])){
            $trang = 1;
        }
        else{
            $trang = $_GET['trang'];
        }              
        $dataId = $this->db->checkallOrder();                
        $data=$this->db->find($trang,1);
        require_once('view/admin/order.php');
    }
}
?>

