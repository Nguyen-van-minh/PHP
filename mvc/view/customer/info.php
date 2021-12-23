<?php require_once('./view/header_one.php') ?>
<div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">


            <h3 style="text-align: center;" class="panel-name">Thông tin tài khoản</h3>

        </div>
        <div class="panel-body">
            <form method="POST" action="index.php?controller=user&action=info">
                <div class="form-group">
                <label for="name">Tên:</label>
                        <input name="name" type="text" class="form-control" id="" value="<?php echo $dataId['username'] ?>" placeholder="Tên danh mục">
                <label for="phone">Số điện thoai:</label>
                        <input name="phone" type="number" class="form-control" id="" value="<?php echo $dataId['phone'] ?>" placeholder="Tên danh mục">

                <label for="email">Email:</label>
                        <input name="email" type="text" class="form-control" id="" value="<?php echo $dataId['email'] ?>" placeholder="Tên danh mục">

                <label for="adress">Địa chỉ:</label>
                        <input name="adress" type="text" class="form-control" id="" value="<?php echo $dataId['adress'] ?>" placeholder="Tên danh mục">
    
                <label for="password">Mật khẩu:</label>
                <input name="password" type="text" class="form-control" id="" value="<?php echo $dataId['password'] ?>" placeholder="Tên danh mục">
                </div>
                <a  href="index.php?">
                <button  class="btn btn-success">
                    << Quay lại trang chủ
                </button>                       
                </a>
                <button class="btn btn-success" name="edit_user">Lưu</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php require_once('./view/footer.php') ?>