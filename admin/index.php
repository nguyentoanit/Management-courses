<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>location.href='login.html';</script>";
}
include('../include/connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Quản lý điểm</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
							Xin chào, <strong><?php echo $_SESSION['username']; ?></strong></br>
							<a href="logout.php" style="color: #000;"><strong>Đăng xuất</strong></a>
                        </div>
                    </li>
					<?php if($_SESSION['quyen']=="administrator"){?>
                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Trang chủ</a>
                    </li>
					<li>
						<a href="?trang=monhoc"><i class="fa fa-camera-retro"></i>Quản lý môn học</a>
					</li>
					<li>
						<a href="?trang=canbo"><i class="fa fa-book"></i>Quản lý cán bộ</a>
					</li>
					<li>
						<a href="?trang=diem"><i class="fa fa-comments-o"></i>Quản lý điểm</a>
					</li>
					<li>
						<a href="?trang=lop"><i class="fa fa-bank"></i>Quản lý lớp</a>
					</li>
					<li>
						<a href="?trang=hocsinh"><i class="fa fa-graduation-cap"></i>Quản lý học sinh</a>
					</li>
					<li>
						<a href="?trang=taikhoan"><i class="fa fa-user"></i>Quản lý tài khoản</a>
					</li>
					<li>
						<a href="?trang=phanquyen"><i class="fa fa-user"></i>Quản lý quyền</a>
					</li>
					<?php }else{
					?>
						<li>
							<a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Trang chủ</a>
						</li>
						<li>
							<a href="?trang=diem"><i class="fa fa-comments-o"></i>Quản lý điểm</a>
						</li>
					<?php
						
					} ?>
					
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<?php
							if(isset($_REQUEST['trang'])){
								switch($_REQUEST['trang']){
									case 'monhoc':
										include('include/qlmonhoc.php');
										break;
									case 'canbo':
										include('include/qlcanbo.php');
										break;
									case 'diem':
										include('include/qldiem.php');
										break;
									case 'lop':
										include('include/qllop.php');
										break;
									case 'hocsinh':
										include('include/qlhocsinh.php');
										break;
									case 'taikhoan':
										include('include/qltaikhoan.php');
										break;
									case 'phanquyen':
										include('include/qlquyen.php');
										break;
								}
							}else {
						?>
                        <h1 class="page-head-line">Chào mừng bạn đến với trang quản trị!</h1>
						<?php
							}
						?>
                    </div>
                </div>
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>