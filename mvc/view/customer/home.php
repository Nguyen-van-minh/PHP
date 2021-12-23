<?php require_once ('./view/header.php');?>
<div style="margin-top: 10px;" class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div>
                    <div>
                        <span class="chulon">DỊCH VỤ HOA TOÀN QUỐC</span>
                    </div>
                    <DIV class="header-left-text">
                        <p style="text-align: justify;">Flower Shop cảm ơn quý khách đã tin tưởng và đồng hành cùng chúng tôi trong suốt thời gian qua. Flower Shop nhận gửi điện hoa Toàn quốc. Quý khách có thể đặt hàng trên web hoặc chat với chúng tôi qua zalo hoặc khung chat góc phải website để được tư vấn cụ thể hơn. Trân trọng và cảm ơn!</p>
                    </DIV>
                </div>

                <div>
                    <div>
                        <span class="chulon">DANH MỤC HOA TƯƠI</span>
                    </div>
                    <DIV class="header-left-text tieu_de">
                        <p>♦ <a class="text" href="">Bó hoa tươi</a></p>
                        <p>♦ <a class="text" href="">Hộp hoa tươi</a></p>
                        <p>♦ <a class="text" href="">Giỏ hoa tươi</a></p>
                        <p>♦ <a class="text" href="">Kệ hoa chúc mừng</a></p>
                        <p>♦ <a class="text" href="">Kệ hoa chia buồn</a></p>
                        <p>♦ <a class="text" href="">Hoa lan hồ điệp</a></p>
                    </DIV>
                </div>
            </div>



            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <div class="header-img">
                    <img style=" width: 95rem; height:44rem ;" src="https://anhdepblog.com/wp-content/uploads/2018/01/hinh-anh-hoa-hong-dep-nhat-56.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div style="margin-bottom: 25px;" class="header-product">
                    <span class="header-product-text">
                        <a style="color: #fff;font-size: 18px;" href="#">Sản Phẩm</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <?php
        $i = 0;
        foreach ($dataId as $value) {
        ?>
            <div style=" padding: 0;width: 27rem;height:36rem;" class="border col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="card ">
                    <a href="index.php?controller=customer&action=chitiet_sp&id=<?php echo $value['id']; ?>"> <?php echo '<img style="width: 21rem;height:22rem;" src="' . $value['image'] . '" style="max-width: 100px"/>'; ?></a>
                    <div class="card-body">
                        <a style="text-decoration: none;color:black" href="">
                            <h5 style="font-size: 20px;" class="card-title"><?php echo $value['name']; ?></h5>
                        </a>
                        <p style="font-size: 16px;color:#E35454 ;"><?php echo number_format($value['price'])." VNĐ"; ?></p>
                        <a href="index.php?controller=cart&action=cart&id=<?php echo $value['id']; ?>&quantity=1" class="btn btn-danger">Mua hàng</a>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>
    </div>
</div>
<?php require_once ('./view/footer.php');?>