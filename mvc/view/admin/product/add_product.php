<?php require_once('./view/admin/header.php') ?>
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
             
                            <h3 class="panel-name">Thêm sản phẩm</h3>
                            
                    
                    </div>
                    <div class="panel-body">                      
                    <form  method="POST" action="" >
                  <div class="form-group">
					  <label for="name">Tên Sản Phẩm:</label>
					  <input name="name" type="text" class="form-control" id="" placeholder="Tên sản phẩm">
					  
					</div>
					<div class="form-group">
					  <label for="price">Chọn Danh Mục:</label>
					  <select class="form-control" name="id_category" id="id_category">
					  	<option>-- Lụa chọn danh mục --</option>
                                <?php                                  
                                    foreach ($data as $item) {
                                        
                                            echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
                                        
                                    }
                                ?>
					  </select>
					</div>
					<div class="form-group">
					  <label for="price">Giá Bán:</label>
					  <input name="price" type="text" class="form-control" id="" placeholder="Giá">
					</div>
					<div class="form-group">
					  <label for="image">image:</label>
					  <input name="image" type="text" class="form-control" id="" placeholder="Hình ảnh">
					</div>
					<div class="form-group">
					  <label for="conten">Nội Dung:</label>
					  <textarea class="form-control" rows="5" name="conten" id="conten"></textarea>
					</div>
					<button class="btn btn-success" name="add_product">Lưu</button>
                  </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    
 
 
 