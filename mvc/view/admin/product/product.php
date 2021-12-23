<?php require_once('./view/admin/header.php') ?>


        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Quản lý sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <a href="index.php?controller=product&&action=add_product">
                        <button style="margin-bottom: 15px;" class="btn btn-success margin-button">Thêm sản phẩm</button>
                    </a>
                    <table class="table table-bordered tale-hover">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Hình Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Bán</th>
                                <th>Danh Mục</th>
                                <th>Ngày Cập Nhật</th>
                                <th width="150px">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tung_trang = ($trang - 1)*4;
                            foreach ($data as $value) {
                            ?>
                                <tr>
                                    <td><?php echo ++$tung_trang ?></td>
                                    <td><?php echo '<img src="' . $value['image'] . '" style="max-width: 100px"/>'; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['price']; ?></td>
                                    <td><?php echo $value['category_name']; ?></td>
                                    <td><?php echo $value['updated_at']; ?></td>
                                    <td>
                                        <a href="index.php?controller=product&action=edit_product&id=<?php echo $value['id']; ?>"><button class="btn btn-warning">Sửa</button></a>

                                        <a href="index.php?controller=product&action=delete&id=<?php echo $value['id']; ?>">

                                            <button onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?') " style=" margin-left: 10px;" class="btn btn-danger" )>Xoá</button>

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
                            $table = 'product';
                            $product_all = $this->db->getAllData($table);
                            $product_count = count($product_all);                           
                            $countButton = ceil($product_count/4);
                            for($i=1; $i<=$countButton; $i++){                                           
                                echo '<a style="margin:4px;" href="index.php?controller=product&action=listProduct&trang='.$i.'">'.$i.'</a>';
                            }
                        ?>
                    </div>   
                </div>
            </div>
        </div>


    </div>
</div>
</div>
<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

<!-- 
    <thead>
        <tr>
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá bán</th>
            <th>Danh mục</th>
            <th>Ngày cập nhật</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($data as $value) {
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo '<img src="' . $value['image'] . '" style="max-width: 100px"/>'; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['price']; ?></td>
                <td><?php echo $value['category_name']; ?></td>
                <td><?php echo $value['updated_at']; ?></td>
               
                <td><a href="index.php?controller=product&action=edit_product&id=<?php echo $value['id']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?') " href="index.php?controller=product&action=delete&id=<?php echo $value['id']; ?>">Delete</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    -->