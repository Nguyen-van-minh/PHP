<?php require_once('./view/admin/header.php') ?>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quản lý người dùng</h3>
                </div>
                <div class="panel-body">
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
                            $tung_trang = ($trang - 1)*6;
                            foreach ($data as $value) {
                            ?>
                                <tr>
                                    <td><?php echo ++$tung_trang ?></td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['password']; ?></td>
                                    <td><?php echo $value['phone']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['adress']; ?></td>
                                    <td><?php echo $value['created']; ?></td>
                                    <td>                                                                     
                                    <a href="index.php?controller=user&action=deleteuser&id=<?php echo $value['id']; ?>">
                                        <button onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?') " style=" margin-left: 10px;" class="btn btn-danger">Xoá</button>
                                    </a>

                                    </td>
                                </tr>
                            <?php                              
                            }
                            ?>

                        </tbody>
                    </table>
                    <div>
                        <?php
                            $i = 1;
                            $table = 'user';
                            $user_all = $this->db->getAllData($table);
                            $user_count = count($user_all);                           
                            $countButton = ceil($user_count/6);
                            for($i=1; $i<=$countButton; $i++){                              
                                echo '<a style="margin:3px;" href="index.php?controller=user&&action=listuser&trang='.$i.'">'.$i.'</a>';
                            }
                        ?>
                    </div>          
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