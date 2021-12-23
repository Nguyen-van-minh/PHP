<?php require_once('./view/admin/header.php') ?>
         <div class="col-sm-9">
             <div class="panel panel-default">
                 <div class="panel-heading">
                    

                            <h3 class="panel-name">Sửa  sản phẩm</h3>
                        
                 </div>
                 <div class="panel-body">
                     <form method="POST" action="">
                         <div class="form-group">
                             <label for="name">Tên Sản Phẩm:</label>
                             <input name="name" type="text" class="form-control" id="" value="<?php echo $dataId['name'] ?>" placeholder="Tên sản phẩm">
                             
                         </div>
                         <div class="form-group">
                         <label for="price">Chọn Danh Mục:</label>
					  <select class="form-control" name="id_category" id="id_category">
					  	<option>-- Lụa chọn danh mục --</option>
                                <?php
                                foreach ($data as $item) {
                                    if ($item['id'] == $dataId['id_category']) {
                                        echo '<option selected value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                    } else {
                                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                    }
                                }
                                ?>
					  </select>
                         </div>
                         <div class="form-group">
                             <label for="price">Giá Bán:</label>
                             <input name="price" type="text" class="form-control" id="" value="<?php echo $dataId['price'] ?>" placeholder="Giá">
                         </div>
                         <div class="form-group">
                             <label for="image">image:</label>
                             <input name="image" type="text" class="form-control" id="" value="<?php echo $dataId['image'] ?>" placeholder="Hình ảnh">
                         </div>
                         <div class="form-group">
                             <label for="conten">Nội Dung:</label>
                             <input style="height: 50px;" name="conten" type="text" class="form-control" id="" value="<?php echo $dataId['conten'] ?>" >
                         </div>
                         <button class="btn btn-success" name="edit_product">Lưu</button>
                     </form>
                 </div>
             </div>
         </div>


     </div>
 </div>
 </div>




 