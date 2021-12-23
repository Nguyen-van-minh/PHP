
<?php
require_once("./Model/dbconfig.php");
class cart_controller{
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
            $this->showCart();
        }
    }
    function showCart(){
        if(isset($_SESSION['id'])){
            $dataId = $this->db->checkCart($_SESSION['id']);
            if(mysqli_num_rows($dataId)>0){
                $user_id=$_SESSION['id'];
                $data = $this->db->getCart($user_id);
            }
            require_once('view/customer/view_cart.php');
        }
        else{
            header('location:index.php?controller=login&action=dangnhap');
        }
    }
    
    public function cart(){
        
        if(isset($_SESSION['id']))
        {
            $user_id=$_SESSION['id'];
            $product_id=$_GET['id'];
            $quantity=1;
            if(isset($_POST['quantity'])){
                $quantity=$_POST['quantity'];
            }
            $check=$this->db->checkCart_1($user_id,$product_id);
            if(mysqli_num_rows($check)>0){
                $data1=$this->db->getquantity($user_id,$product_id);
                $qty=$quantity+$data1['quantity'];
                echo $qty;
                $this->db->upCart($user_id,$product_id,$qty);
                header('location:index.php?controller=cart&action=showCart');
            }
            else{
                $this->db->addCart($user_id,$product_id,$quantity);
                header('location:index.php?controller=cart&action=showCart');
            }
        }
        else{
            header('location:index.php?controller=login&action=dangnhap');
        }

    }
    function delete(){
        $id = $_GET['id'];                   
        $this->db->deleteCart("cart",$id);
        $this->showCart();
    }
    
}
?>

