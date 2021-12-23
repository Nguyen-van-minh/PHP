<?php require_once('./view/admin/header.php') ?>
<div style ="text-align: center;"class="container">
    <?php if((mysqli_num_rows($dataId)>0))
                {?>
        <div style="display: flex;justify-content: space-between;align-items: baseline;">
            <h1 style="font-weight: bold;font-size:2em">Danh sách đơn hàng</h1>
            <div style="margin-left: 15vh;" class="dropdown">
                    <button class="btn btn-secondary dropdown-toggleG" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Lọc thẹo trạng thái
                    </button>
                    <ul style ="z-index: 10001;"class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a href="index.php?controller=order&action=listOder">Tất Cả</a></li>
                        <li><a href="index.php?controller=order&action=duyet1">Chưa Duyệt</a></li>
                        <li><a class="dropdown-item" href="index.php?controller=order&action=duyet2">Đã duyệt</a></li>
                        <li><a class="dropdown-item" href="index.php?controller=order&action=duyet3">Hủy</a></li>
                    </ul>
                </div>
            </div>    
        <div class="row">
            <div class="col-md-9">
            <table class="table table-bordered tale-hover">
                <thead>
                    <tr>
                        <th width="50px">STT</th>
                        <th >Hình ảnh</th>
                        <th >Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th width="400px">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // $i=1;
                    // foreach ($data as $item) {
                        $tung_trang = ($trang - 1)*4;
                        foreach ($data as $item) {
                ?>   
                        <tr>
                            <td><?php echo ++$tung_trang ?></td>
                            <td><?php echo '<img src="' . $item['image'] . '" style="max-width: 100px"/>'; ?></td>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo ($item['qty']); ?></td>
                            <td><?php echo ($item['total']); ?></td>
                            <td><?php echo ($item['username']); ?></td>
                            <td><?php echo ($item['phone']); ?></td>
                            <td><?php echo ($item['email']); ?></td>
                            <td><?php echo ($item['adress']); ?></td>
                            <td><?php echo ($item['created']); ?></td>
                            <td><?php 
                            if($item['status']===number_format(0)){ echo"đang chờ duyệt";}
                            if($item['status']===number_format(1)){ echo"Đã hủy";}
                            if($item['status']===number_format(2)){ echo "thành công";}
                            ?></td>
                            <td>
                            <?php 
                            if($item['status']==0){ ?>
                                <a href="index.php?controller=order&action=huy&id=<?= $item['id']; ?>" > 
                                <button class="btn btn-danger"><i class="far fa-trash-alt" style="margin-right:3px;"></i>Hủy</button>
                                </a>
                                <a href="index.php?controller=order&action=duyet&id=<?= $item['id']; ?>" > 
                                <button style="margin-top: 3px;" class="btn btn-success margin-button"><i class="fas fa-check-square" style="margin-right:3px;"></i>Duyệt</button>
                                </a>
                            <?php } ?>
                            </td>                   
                <?php
                    }
                }
                else{
                    echo '<h3>Order của bạn đang trống</h3>';
                }
                           
            ?>
                        </tr>
                </tbody>
            </table>
            <div>
                        <?php
                            $i = 1;                          
                            $order_all = $this->db->getAllOrder("order");
                            $order_count = count($order_all);                           
                            $countButton = ceil($order_count/4);
                            for($i=1; $i<=$countButton; $i++){                                           
                                echo '<a style="margin:4px;" href="index.php?controller=order&&action='.$_SESSION['action'].'&trang='.$i.'">'.$i.'</a>';
                            }
                        ?>
                    </div>   
            </div>  
            </div>
            
        </div>
        
    </div>


















