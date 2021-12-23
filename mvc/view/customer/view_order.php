<?php require_once('./view/header_one.php') ?>
<div style ="text-align: center;"class="container">
    <?php if((mysqli_num_rows($dataId)>0))
                {?>
        <h1 style="font-weight: bold;font-size:2em">Đơn hàng của bạn</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="header_giohang">
                    <div style="width: 13%;"> </div>
                    <div style="width: 27%;">Tên</div>
                    <div style="width: 10%;text-align: center;">Đơn giá</div>
                    <div style="width: 15%;text-align: center;">Số lượng</div>
                    <div style="width: 15%;text-align: center;">Thành tiền</div>
                    <div style="width: 11%;text-align: center;">Trạng thái</div>
                    <div style="width: 9%;"></div>
                </div>
                
                <?php
                    foreach ($data as $item) {
                        
                ?>   
                                         
                <div class="giohang">
                    <div style="width: 13%;"><img src="<?php echo $item['image'] ?>" style="height: 10rem;width:10rem;"/> </div>
                    <div style="width: 27%;"><?php echo $item['name'] ?></div>
                    <div style="width: 10%;text-align: center;"><?php echo number_format($item['price'])." VND"; ?></div>
                    <div style="width: 15%;text-align: center;">
                    <?php echo $item['qty'] ?>                           
                    </div>
                    <div style="width: 15%;text-align: center;"><?php echo number_format($item['total'])." VND";  ?></div>
                    <div style="width: 11%;text-align: center;"><?php 
                    if($item['status']===number_format(0)){ echo"đang chờ duyệt";}
                    if($item['status']===number_format(1)){ echo"Đã hủy";}
                    if($item['status']===number_format(2)){ echo "thành công";}
                    ?></div>
                    <div style="width: 9%;text-align: center;">
                    <?php 
                    if($item['status']==0){ ?>
        
                        <a href="index.php?controller=order&action=delete&id=<?php echo $item['id']; ?>" > 
                            <button class="btn btn-danger"><i class="far fa-trash-alt" style="margin-right:3px;"></i>Delete</button>
                        </a>
                    <?php
                    } 
                    ?>
                    </div>
                </div>                                            
                <?php
                    }
                }
                else{
                    echo '<h3>Giỏ hàng của bạn đang trống</h3>';
                }
            ?>
                
            </div>
            <div>
                
                <a  href="index.php?controller=customer&action=listProductHome&id=<?php echo 11; ?>">
                <button  class="btn btn-success">
                    << Quay lại chọn hàng
                </button>                       
                </a>
            </div>
            
        </div>
        
    </div>
    <?php require_once('./view/footer.php') ?>

















