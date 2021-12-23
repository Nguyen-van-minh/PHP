<?php require_once('./view/admin/header.php') ?>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm tài khoản admin</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Thêm tài khoản</label>
                        </div>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" id="" placeholder="Tên Tài khoản">
                        </div>
                        <div class="form-group">
                            <input name="password" type="text" class="form-control" id="" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control" id="" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="adress" type="text" class="form-control" id="" placeholder="Địa chỉ">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="add_admin">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
<footer class="container-fluid">
    <p>Footer Text</p>
</footer>