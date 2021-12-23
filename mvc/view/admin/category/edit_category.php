<?php require_once('./view/admin/header.php') ?>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">


                    <h3 class="panel-name">Sửa danh mục</h3>

                </div>
                <div class="panel-body">
                    <form method="POST" action="">
                        <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                             <input name="name" type="text" class="form-control" id="" value="<?php echo $dataId['name'] ?>" placeholder="Tên danh mục">
                        </div>
                        <button class="btn btn-success" name="edit_category">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>