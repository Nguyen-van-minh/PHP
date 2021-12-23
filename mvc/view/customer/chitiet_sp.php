<?php require_once ('./view/header.php');?>
<h1 style="text-align: center;color:#f5093cde;margin-top:30px; margin-bottom:30px ;">CHI TIẾT SẢN PHẨM</h1>
<div>
    <div class="chi_tiet_san_pham">
        <img style="width: 40rem;height:40rem;" src="<?php echo $dataId['image'] ?>" alt="">
        <div class="thong_tin_san_pham">
            <form action="index.php?controller=cart&action=cart&id=<?=$dataId['id'] ?>" method="POST" role="form">
            <h5 style="font-size: 20px;" class="card-title">Tên Sản Phẩm: <?php echo $dataId['name'] ?></h5>
            <p style="font-size: 16px; color:#E35454 ;">Giá: <?php echo number_format($dataId['price']) . " VNĐ";  ?></p>
            <p style="font-size: 16px; color:#E35454 ;">Số lượng: 
            <input name ="quantity"value="1" type="number" min="1" max ="<?=$dataId['all_quantity']?>" step="1"></input>
            </p>

            <div class="noi_dung_san_pham">
                <div style="padding:0px 5px 0px 10px">
                    <p>Chi tiết: <?php echo $dataId['conten']; ?></p>
                </div>

            </div>
            <div>

                <button type="submit"  class="btn btn-danger">Thêm vào giỏ hàng</button>
            </form>
           
                <!-- <button class="btn btn-success" onclick="addToCart('.$item['id'].')">Thêm vào giỏ</button> -->
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="col-md-12 col-xs-12" style="background-color: whitesmoke;margin-top:10px;">
                            <div class="fb-share-button" data-href="//facebook.com/Rì-viu-phim-103418141715660/"
                                data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                                    class="fb-xfbml-parse-ignore" target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Friviuphim.net%2Fshop%2F&amp;src=sdkpreparse">Chia
                                    sẻ</a></div>
                            <div class="fb-follow" data-href="//facebook.com/Rì-viu-phim-103418141715660" data-width="400px"
                                data-layout="button_count" data-size="small" data-show-faces="false"></div>
                            <div class="fb-send" data-href="//facebook.com/Rì-viu-phim-103418141715660/"></div>
                            <div class="fb-comments" data-href="http://127.0.0.1:8001/detail/<?=$dataId['id']?>"
                                data-width="1090" data-numposts="10" data-order-by="social"></div>

                        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div style="margin-bottom: 25px;" class="header-product">
                <span class="header-product-text">
                    <a style="color: #fff;font-size: 18px;" href="">
                        SẢN PHẨM LIÊN QUAN
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
        foreach ($dataList as $value) {
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
                        <a href="index.php?controller=cart&action=store&id=<?php echo $value['id']; ?>" class="btn btn-danger">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php require_once ('./view/footer.php');?>