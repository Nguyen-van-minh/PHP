<?php if($_SESSION['permission']==false){
    header('location:index.php?');
}?>
<div class="container-fluid">
    <div class="row content">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php?">FlowerShop</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="index.php?controller=login&action=logout"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
                </ul>
            </div>
        </nav>

        <div class="col-sm-3 sidenav">
            <h4>Admin</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="index.php?controller=chart">Home</a></li>
                <li><a href="index.php?controller=category&&action=listCategory">Quản lý danh mục</a></li>
                <li><a href="index.php?controller=product&&action=listProduct">Quản lý sản phẩm</a></li>
                <li><a href="index.php?controller=order&&action=listOder">Quản lý đơn hàng</a></li>
                <li><a href="index.php?controller=user&&action=listuser">Quản lý người dùng</a></li>
                <li><a href="index.php?controller=admin&&action=listAdmin">Tài khoản Admin</a></li>
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>

