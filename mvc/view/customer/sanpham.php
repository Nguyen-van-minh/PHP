<?php require_once ('./view/header.php');?>
<h1 style="text-align: center;color:#f5093cde;margin-top:30px;">
    <?php
    if ($id == 12) {
        echo "BÓ HOA";
    } elseif ($id == 51) {
        echo "HOA CHÚC MỪNG";
    } elseif ($id == 14) {
        echo "HOA CHIA BUỒN";
    } elseif ($id == 15) {
        echo "LAN HỒ ĐIỆP";
    } elseif ($id == 57) {
        echo "GIỎ HOA";
    } elseif ($id == 58) {
        echo "HỘP HOA";
    } elseif ($id == 59) {
        echo "HOA CẦM TAY";
    } elseif ($id == 60) {
        echo "TRANG TRÍ XE HƠI";
    } elseif ($id == 61) {
        echo "SINH NHẬT BA MẸ";
    } elseif ($id == 62) {
        echo "SINH NHẬT NGƯỜI YÊU";
    } elseif ($id == 63) {
        echo "SINH NHẬT ĐỒNG NGHIỆP";
    } elseif ($id == 64) {
        echo "SINH NHẬT VỢ-CHỒNG";
    } elseif ($id == 54) {
        echo "BÓ HOA HỒNG";
    } elseif ($id == 55) {
        echo "BÓ HOA CÚC";
    } elseif ($id == 56) {
        echo "BÓ HOA GIẢ";
    } elseif ($id == 15) {
        echo "BÓ HOA LY";
    }
    ?>
</h1>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div style="margin-bottom: 25px;" class="header-product">
                <span class="header-product-text">
                    <a style="color: #fff;font-size: 18px;" href="">
                        <?php
                        if ($id == 12) {
                            echo "BÓ HOA";
                        } elseif ($id == 51) {
                            echo "HOA CHÚC MỪNG";
                        } elseif ($id == 14) {
                            echo "HOA CHIA BUỒN";
                        } elseif ($id == 15) {
                            echo "LAN HỒ ĐIỆP";
                        } elseif ($id == 57) {
                            echo "GIỎ HOA";
                        } elseif ($id == 58) {
                            echo "HỘP HOA";
                        } elseif ($id == 59) {
                            echo "HOA CẦM TAY";
                        } elseif ($id == 60) {
                            echo "TRANG TRÍ XE HƠI";
                        } elseif ($id == 61) {
                            echo "SINH NHẬT BA MẸ";
                        } elseif ($id == 62) {
                            echo "SINH NHẬT NGƯỜI YÊU";
                        } elseif ($id == 63) {
                            echo "SINH NHẬT ĐỒNG NGHIỆP";
                        } elseif ($id == 64) {
                            echo "SINH NHẬT VỢ-CHỒNG";
                        } elseif ($id == 54) {
                            echo "BÓ HOA HỒNG";
                        } elseif ($id == 55) {
                            echo "BÓ HOA CÚC";
                        } elseif ($id == 56) {
                            echo "BÓ HOA GIẢ";
                        } elseif ($id == 15) {
                            echo "BÓ HOA LY";
                        }
                        ?>
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php     
        foreach ($dataId as $value) {
        ?>
            <div style=" padding: 0;width: 27rem;height:36rem;" class="border col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="card ">
                    <a href="index.php?controller=customer&action=chitiet_sp&id=<?php echo $value['id']; ?>"> <?php echo '<img style="width: 21rem;height:22rem;" src="' . $value['image'] . '" style="max-width: 100px"/>'; ?></a>
                    <div class="card-body">
                        <a style="text-decoration: none;color:black" href="">
                            <h5 style="font-size: 20px;" class="card-title"><?php echo $value['name']; ?></h5>
                        </a>
                        <p style="font-size: 16px;
                                                  color:#E35454 ;"><?php echo number_format($value['price']) . " VNĐ"; ?></p>
                        <a href="index.php?controller=cart&action=cart&id=<?php echo $value['id']; ?>" class="btn btn-danger">Mua hàng</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php require_once ('./view/footer.php');?>