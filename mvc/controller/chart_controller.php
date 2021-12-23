<?php
require_once("./Model/dbconfig.php");
class chart_controller{
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
            $this->listchart();
        }
    }
    function listchart()
    {
        
        $dataId = $this->db->checkallOrder();
        if(mysqli_num_rows($dataId)>0){
           $data=$this->db->count();
           $data1=$this->db->sum();
        }
        require_once('view/admin/chart/chart.php');
    }
    
    
}
?>

