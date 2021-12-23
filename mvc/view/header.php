
<div class="header">
    <div class="header-gioithieu">
        <div>
            <p>
                <span class="header-text">Thời gian làm việc 24/7</span>
            </p>
        </div>

        <div>
            <p>
                <span class="header-text">Hệ thống shop: 11523 của hàng & đối tác trên ở tất cả các quận huyện, thành phố</span>
            </p>
        </div>
        &emsp;
        <div>
            <p>
                <span style="color:#c81818" class="header-text">HOTLINE: 0399998888</span>
            </p>
        </div>
    </div>


    <div class="header-logo">
        <div style="margin-right: 35rem;">
            <a style="font-family: Comic Sans MS; font-size:20px;color:#fd72d9;text-decoration: none" href="index.php?controller=customer&action=listProductHome&id=<?php echo 11; ?>">
                <i style="font-size: 40px;" class="far fa-flower-tulip"></i>Flower SHOP
            </a>
        </div>

        <div class="input-group">
            <?php $id= filter_input(INPUT_GET,"id");?>
            <form action="?controller=customer&action=Search&id=<?php echo $id;?>" method= "POST" class="input-group">
                <input style="width: 55vh;" type="text" class="form-control" name="tukhoa" id="exampleInputAmount" placeholder="Search">
                <span class="input-group-btn">
                    <input type="submit" name="action" value="Search" class="btn btn-default"></input>
                </span>
            </form>
        </div>
        <div style="margin-left: 4rem;">
            <a href="index.php?controller=cart&action=showCart" style="color: #464646;"><i  style="font-size: 22px; cursor: pointer; " class="fas fa-shopping-cart"></i></a>
        </div>
        <?php
        if(isset($_SESSION['name'])){
        ?>
            <div style="margin-left: 15vh;" class="dropdown">
                <button class="btn btn-secondary dropdown-toggleG" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['name']?> <i style="font-size: 15px;margin-left: 5px;" class="fas fa-user-circle"></i></button>
                </button>
                <ul style ="z-index: 10001;"class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a href="index.php?controller=login&action=logout">Đăng Xuất</a></li>
                    <li><a class="dropdown-item" href="index.php?controller=user&action=info">Thông tin tài khoản</a></li>
                    <li><a class="dropdown-item" href="index.php?controller=order&action=showOrder">Chi Tiết đơn hàng</a></li>
                    <?php if($_SESSION['permission']!=false){?>
                        <li><a class="dropdown-item" href="index.php?controller=admin">Admin</a></li>
                    
                    <?php }?>
                </ul>
            </div>
        <?php }
        else{ ?>
            <a href="index.php?controller=login&action=dangnhap" style="margin-left: 12rem;color:#464646;"><i style="font-size: 35px;" class="fas fa-user-circle"></i></a>
        <?php } 
        ?>
        </div>
    </div>

    <!-- <div class="header-nav header-top"> -->
    <div id="nav-top" class="header-nav">
            <DIV class="nav-element tieu_de">
                <a class="nav-element-text" href="index.php?controller=customer&action=listProductHome">TRANG CHỦ</a>
            </DIV>

            <div class="nav-element tieu_de">
                <a class="nav-element-text" href="index.php?controller=customer&action=listProduct&id=<?php echo 12; ?>">BÓ HOA</a>
            </div>

            <div class="dropdown nav-element">
                <button class="nut_dropdown nav-element-text">GIỎ HOA - HỘP HOA <i style="font-size: 15px;margin-left: 5px;" class="fas fa-angle-double-down"></i></button>
                <div class="noidung_dropdown">
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 57; ?>">GIỎ HOA</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 58; ?>">HỘP HOA</a>

                </div>
            </div>

            <div class="dropdown nav-element">
                <button class="nut_dropdown nav-element-text">HOA CƯỚI <i style="font-size: 15px;margin-left: 5px;" class="fas fa-angle-double-down"></i></button>
                <div class="noidung_dropdown">
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 59; ?>">HOA CẦM TAY</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 60; ?>">TRANG TRÍ XE CƯỚI</a>

                </div>
            </div>

            <div class="dropdown nav-element">
                <button class="nut_dropdown nav-element-text">HOA SINH NHẬT <i style="font-size: 15px;margin-left: 5px;" class="fas fa-angle-double-down"></i></button>
                <div class="noidung_dropdown">
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 61; ?>">SINH NHẬT BA MẸ</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 62; ?>">SINH NHẬT NGƯỜI YÊU</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 64; ?>">SINH NHẬT VỢ-CHỒNG</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 63; ?>">SINH NHẬT ĐỒNG NGHIỆP</a>
                </div>
            </div>

            <div class="nav-element tieu_de">
                <a class="nav-element-text" href="index.php?controller=customer&action=listProduct&id=<?php echo 51; ?>">HOA CHÚC MỪNG</a>
            </div>

            <div class="nav-element tieu_de">
                <a class="nav-element-text" href="index.php?controller=customer&action=listProduct&id=<?php echo 14; ?>">HOA CHIA BUỒN</a>
            </div>

            <div class="nav-element tieu_de">
                <a class="nav-element-text" href="index.php?controller=customer&action=listProduct&id=<?php echo 15; ?>">LAN HỒ ĐIỆP</a>
            </div>

            <div class="dropdown nav-element">
                <button class="nut_dropdown nav-element-text">LOẠI HOA <i style="font-size: 15px;margin-left: 5px;" class="fas fa-angle-double-down"></i></button>
                <div class="noidung_dropdown">                                        
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 55; ?>">BÓ HOA CÚC</a>
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 54; ?>">BÓ HOA HỒNG</a>                                              
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 65; ?>">BÓ HOA LY</a>                       
                    <a href="index.php?controller=customer&action=listProduct&id=<?php echo 56; ?>">HOA GIẢ</a>
                </div>
            </div>
    </div>
</div>
