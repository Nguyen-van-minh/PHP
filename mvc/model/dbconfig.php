<?php
    class database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'banhoa';

        private $conn = null;
        private $result = null;

        public function connect()
        {
           $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
           if(!$this->conn){
               echo "Kết nối thất bại";
                exit();
           }else{
               mysqli_set_charset($this->conn,'utf8');
           }
           return $this->conn;
        }

        //thực hiện truy vấn
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        //thực hiện lấy dữ liệu
        public function getData(){
                   
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        
        public function getAllData($table){
            $sql = "select * from $table";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function getAdmin(){
            $sql = "select * from user where permission=true";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function count(){
            $sql = "SELECT count(*) as duyet ,(SELECT count(*) FROM `order` WHERE status=1) as huy,
            (SELECT count(*) as a  FROM `order`  WHERE status=0) as choduyet
            FROM `order`  WHERE status=2";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function sum(){

            $sql = "SELECT sum(total) as duyet ,(SELECT sum(total) FROM `order` WHERE status=1) as huy,
            (SELECT sum(total) as a  FROM `order`  WHERE status=0) as choduyet,(SELECT sum(total) as a  FROM `order`) as tong
            FROM `order`  WHERE status=2";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function getAllOrder(){
            $sql = "select *, `order`.id from `order` inner join `user` on `order`.user_id=`user`.id inner join `product` on `order`.product_id=`product`.id";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function checkallOrder(){
            $sql = "select * from `order`";
            $data=$this->execute($sql);
            return $data;
        }
        public function checkOrder($id){
            $sql = "select * from `order` where user_id=$id";
            $data=$this->execute($sql);
            return $data;
        }
        public function checkCart($id){
            $sql = "select * from cart where user_id=$id";
            $data=$this->execute($sql);
            return $data;
        }
        
        public function checkUser($name){
            $sql = "select * from `user` where `username`='$name'";
            $data=$this->execute($sql);
            return $data;
        }
        public function checkCart_1($user_id,$product_id){
            $sql = "select * from cart where user_id=$user_id and product_id=$product_id  ";
            $data=$this->execute($sql);
            return $data;
        }
        public function getCart($user_id){
            $sql = "select * from cart, product where user_id=$user_id and cart.product_id=product.id";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        
        public function getOrder($user_id){
            $sql = "select *, `order`.id  from `order`, product where order.user_id=$user_id and order.product_id=product.id";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function checkSearch($table,$tukhoa){
            $sql = "select * from $table WHERE name LIKE '%$tukhoa%'";
            $data=$this->execute($sql);
            return $data;
        }

        public function Search($table,$tukhoa){
            $sql = "select * from $table WHERE name LIKE '%$tukhoa%'";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function checkSearchId($table,$tukhoa,$id){
            $sql = "select * from $table WHERE name LIKE '%$tukhoa%' and id_category=$id ";
            $data=$this->execute($sql);
            return $data;
        }
        public function SearchId($table,$tukhoa, $id){
            $sql = "select * from $table WHERE name LIKE '%$tukhoa%' and id_category=$id ";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        
        public function getDataId($table,$id){

            $sql = "select * from $table where id = $id";
            $this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        
        public function getquantity($user_id,$product_id){

            $sql = "select * from cart where user_id = $user_id and product_id=$product_id ";
            $this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        public function getUserid($id){
            $sql = "select * from user where id = $id ";
            $this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        public function phantrang($table,$trang){
            $tung_trang = ($trang - 1)*6;
            $sql = "SELECT * FROM $table LIMIT $tung_trang, 6";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function find($trang,$i){
            $tung_trang = ($trang - 1)*4;
            $sql = "select *, `order`.id from `order` inner join `user` on `order`.user_id=`user`.id inner join `product` on `order`.product_id=`product`.id where status='$i' LIMIT $tung_trang, 4";
            return $this->execute($sql);
        }
        public function phantrangOrder($trang){
            $tung_trang = ($trang - 1)*4;
            $sql = "select *, `order`.id from `order` inner join `user` on `order`.user_id=`user`.id inner join `product` on `order`.product_id=`product`.id LIMIT $tung_trang, 4";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        
        public function phantrangProduct($trang){
            $tung_trang = ($trang - 1)*4;
            $sql         = "select product.id, product.name, product.price, product.image, product.updated_at, category.name category_name from product left join category on product.id_category = category.id LIMIT $tung_trang, 4";
            $this->execute($sql);
            if($this->dem()==0){
                $dataProduct=0;
            }
            else{
                while($datasProduct = $this->getData()) {
                    $dataProduct[] = $datasProduct;
                }
            }
            return $dataProduct;
        }
        
        public function getList($id){
            $sql         = "select product.id, product.name, product.price, product.image, product.updated_at, category.name category_name from product left join category on product.id_category = category.id where product.id_category=$id ";
            $this->execute($sql);
            if($this->dem()==0){
                $a=0;
            }
            else{
                while($b = $this->getData()) {
                    $a[] = $b;
                }
            }
            return $a;
        }

        
        public function dem(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }
        public function insertUseradmin($name,$password,$phone,$email,$adress,$created){
            $sql = "insert into user(username,password,phone,email,adress,created,permission) values ('$name','$password','$phone','$email','$adress','$created',true)";
            return $this->execute($sql);
        }
        public function kiemtradangnhap($name,$password){
            $sql = "select * from user where username = '$name' and password='$password'";
            return $this->execute($sql);
        }
        public function mkcheckUser($name,$pass){
            $sql = "select * from `user` where `username`='$name' and `password`='$pass'";
            $data=$this->execute($sql);
            return $data;
        }
        public function update($table,$id,$name,$updated_at){
            $sql = "update $table set name = '$name', updated_at ='$updated_at' where id = '$id'";
            return $this->execute($sql);
        }

        public function updateadmin($table,$id,$name,$username,$password){
            $sql = "update $table set username = '$name', username ='$username',password ='$password' where id = '$id'";
            return $this->execute($sql);
        }
        public function duyet($i,$id){
            $sql = "update `order` set status = '$i' where id = '$id'";
            return $this->execute($sql);
        }
        
        public function insertAdmin($name,$username,$password){
            $sql = "insert into admin(username,username,password) values ('$name','$username','$password')";
            return $this->execute($sql);
        }
        public function addCart($user_id,$product_id,$quantity){
            $sql = "insert into cart (user_id,product_id,quantity) values ('$user_id','$product_id','$quantity')";
            return $this->execute($sql);
        }
        public function order($user_id,$product_id,$qty,$total,$created_at){
            $sql = "INSERT INTO `order` (`user_id`, `product_id`, `qty`, `total`, `created`) VALUES ('$user_id','$product_id','$qty','$total','$created_at');";
            return $this->execute($sql);
        }
        public function insertCategory($name, $created_at,$updated_at){
            $sql = 'insert into category(name,created_at,updated_at) values ("'.$name.'","'.$created_at.'","'.$updated_at.'")';
            return $this->execute($sql);
        }

        public function insertUser($name,$password,$phone,$email,$adress,$created){
            $sql = "insert into user(username,password,phone,email,adress,created) values ('$name','$password','$phone','$email','$adress','$created')";
            return $this->execute($sql);
        }
       
        public function insertProduct($name,$price,$image,$conten,$id_category,$created_at,$updated_at){
            $sql = 'insert into product(name, price, image, conten, id_category, created_at, updated_at) values ("'.$name.'", "'.$price.'", "'.$image.'", "'.$conten.'", "'.$id_category.'", "'.$created_at.'", "'.$updated_at.'")';
            return $this->execute($sql);
        }
      
        public function updateProduct($id,$name,$price,$image,$conten,$id_category,$updated_at){
            $sql = 'update product set name = "'.$name.'", updated_at = "'.$updated_at.'", image = "'.$image.'", price = "'.$price.'", conten = "'.$conten.'", id_category = "'.$id_category.'" where id = '.$id;
            return $this->execute($sql);
        }
        public function upCart($user_id,$product_id,$quantity){
            $sql = "update cart set quantity = '$quantity' where user_id = '$user_id' and product_id = '$product_id'";
            return $this->execute($sql);
        }
        public function upUser($name,$password,$phone,$email){
            $sql = "update user set password = '$password' where username = '$name' and phone = '$phone' and email = '$email'";
            return $this->execute($sql);
        }
        public function updateuser($id,$name,$phone,$email,$adress,$password){
            $sql = "update `user` set password = '$password',username = '$name',phone = '$phone',email = '$email',adress = '$adress' where id = '$id'";
            return $this->execute($sql);
        }
        public function delete($table,$id){
            $sql = "delete from `$table` where id=$id";
            return $this->execute($sql);
        }
        public function deleteCart($table,$id){
            $sql = "delete from $table where cart_id=$id";
            return $this->execute($sql);
        }
        public function deleteCartAll($table,$id){
            $sql = "delete from $table where user_id=$id";
            return $this->execute($sql);
        }
    }