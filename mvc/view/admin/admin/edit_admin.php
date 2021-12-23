<?php require_once('./view/admin/header.php') ?>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">


                <h3 class="panel-name">Sửa admin</h3>

            </div>
            <div class="panel-body">
                <form method="POST" action="">
                    <div class="form-group">
                    <label for="name">Tên người dùng:</label>
                            <input name="name" type="text" class="form-control" id="" value="<?php echo $dataId['name'] ?>" placeholder="Tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tài khoản:</label>
                            <input name="username" type="text" class="form-control" id="" value="<?php echo $dataId['username'] ?>" placeholder="Tên tài khoản">
                    </div>
                    <div class="form-group">
                        <label for="name">Mật khẩu:</label>
                            <input name="password" type="text" class="form-control" id="" value="<?php echo $dataId['password'] ?>" placeholder="Mật khẩu">
                    </div>
                    <button class="btn btn-success" name="edit_admin">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>