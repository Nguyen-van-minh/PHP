    <?php require_once('./view/admin/header.php') ?>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Quản lý admin</h3>
            </div>
            <div class="panel-body">
                <a href="index.php?controller=admin&&action=add_admin">
                    <button style="margin-bottom: 15px;" class="btn btn-success margin-button">Thêm tài khoản admin</button>
                </a>
                <table class="table table-bordered tale-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">STT</th>
                                <th>Tên</th>
                                <th>Mật khẩu</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Ngày cập nhật</th>
                                <th style="width: 200px;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($data as $value) {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['password']; ?></td>
                                    <td><?php echo $value['phone']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['adress']; ?></td>
                                    <td><?php echo $value['created']; ?></td>
                                    <td>                                                                     
                                    <a href="index.php?controller=user&action=deleteuser&id=<?php echo $value['id']; ?>">
                                        <button onclick="return confirm('Bạn có chắc muốn xóa Tài khoản này không?') " style=" margin-left: 10px;" class="btn btn-danger">Xoá</button>
                                    </a>

                                    </td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>

                        </tbody>
                    </table>

                </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>
</div>
</div>
<footer class="container-fluid">
    <p>Footer Text</p>
</footer>