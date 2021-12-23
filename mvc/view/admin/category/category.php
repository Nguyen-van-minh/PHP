<?php require_once('./view/admin/header.php') ?>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quản lý danh mục</h3>
                </div>
                <div class="panel-body">
                    <a href="index.php?controller=category&&action=add_category">
                        <button style="margin-bottom: 15px;" class="btn btn-success margin-button">Thêm danh mục</button>
                    </a>
                    <table class="table table-bordered tale-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">STT</th>
                                <th>Tên danh mục</th>
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
                                    <td><?php echo  ++$tung_trang ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['updated_at']; ?></td>
                                    <td>
                                        <a href="index.php?controller=category&action=edit_category&id=<?php echo $value['id']; ?>"><button class="btn btn-warning">Sửa</button></a>
                                        <a href="index.php?controller=category&action=deleteCategory&id=<?php echo $value['id']; ?>">
                                            <button onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?') " style=" margin-left: 10px;" class="btn btn-danger">Xoá</button>
                                        </a>

                                    </td>
                                </tr>
                            <?php
                               
                            }
                            ?>
                        </tbody>
                        <div>                      
                        </div>
                    </table>

                    <div>
                        <?php
                            $i = 1;
                            $table = 'category';
                            $category_all = $this->db->getAllData($table);
                            $category_count = count($category_all);                           
                            $countButton = ceil($category_count/6);
                            for($i=1; $i<=$countButton; $i++){                              
                                echo '<a style="margin:3px;" href="index.php?controller=category&action=listCategory&trang='.$i.'">'.$i.'</a>';
                            }
                        ?>
                    </div>                                  
                </div>
            </div>
        </div>

        <!-- echo '<a href="index.php?controller=category&action=listCategory&trang='.$i.' >'.$i.'</a>'; -->
    </div>
</div>
</div>
<footer class="container-fluid">
    <p>Footer Text</p>
</footer>