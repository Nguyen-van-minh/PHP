<?php require_once('./view/header_one.php') ?>
<div style ="text-align: center;min-height: 400px;"class="container" >
    <?php if((mysqli_num_rows($dataId)>0))
                {?>
        <h1 style="font-weight: bold;font-size:2em">Giỏ hàng của bạn</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="header_giohang">
                    <div style="width: 13%;"> </div>
                    <div style="width: 27%;">Tên</div>
                    <div style="width: 10%;text-align: right;">Đơn giá</div>
                    <div style="width: 20%;text-align: right;">Số lượng</div>
                    <div style="width: 20%;text-align: right;">Thành tiền</div>
                    <div style="width: 10%;"></div>
                </div>
                
                <?php
                    $total = 0;  
                    foreach ($data as $item) {
                        $total += $item['quantity']*$item['price'];
                ?>   
                                         
                <div class="giohang">
                    <div style="width: 13%;"><img src="<?php echo $item['image'] ?>" style="height: 10rem;width:10rem;"/> </div>
                    <div style="width: 27%;"><?php echo $item['name'] ?></div>
                    <div style="width: 10%;text-align: right;"><?php echo number_format($item['price'])." VND"; ?></div>
                    <div style="width: 20%;text-align: right;">
                    <?php echo $item['quantity'] ?>                           
                    </div>
                    <div style="width: 20%;text-align: right;"><?php echo number_format($item['quantity']*$item['price'])." VND";  ?></div>
                    <div style="width: 10%;text-align: right;">
                    <a href="index.php?controller=cart&action=delete&id=<?php echo $item['cart_id']; ?>" > 
                        <button class="btn btn-danger"><i class="far fa-trash-alt" style="margin-right:3px;"></i>Delete</button>
                    </a>
                    </div>
                </div>                                            
                <?php
                    }
                }
                else{
                    echo '<h3>Giỏ hàng của bạn đang trống</h3>';
                   echo '<div class="giohang"></div>';
                   echo '<div class="giohang"></div>';
                   echo '<div class="giohang"></div>';
                }
            ?>
                
            </div>
            <div>
                <div style=" text-align: right;">
                    <p style="font-size: 20px;">
                    <?php if(isset($total)){?>
                        Tổng cộng: <?= number_format($total) ?> VND
                    </p>
                    <a  href="index.php?controller=order&action=order&id=<?= $item['user_id']; ?>&qty=<?= $item['quantity'];?>&total=<?= $total;?>">
                        <button onclick="return alert('Bạn đã đặt hàng thành công')" class="btn btn btn-danger">Mua hàng</button>                       
                    </a>
                    <?php }?>
                </div>
                <a  href="index.php?controller=customer&action=listProductHome&id=<?php echo 11; ?>">
                <button style="margin-left: 20px;"  class="btn btn-success">
                    << Quay lại chọn hàng
                </button>                       
                </a>
            </div>
            
        </div>
        
    </div>
    <?php require_once('./view/footer.php') ?>

















