<!doctype html>
<html>
<head>
<title>Trang quản lý học sinh</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/javascript.js"></script>
</head>
<body id="header">
<?php
	include('connectdb.php');
?>
<div class="container">
	<div class="row">
			<div class="banner">
				<img src="../images/banner.jpg" style="width:100%" />
			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="../index.php">Trang chủ</a></li>
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="qlmonhoc.php">Môn học</a></li>
							<li><a href="qlgiaovien.php">Giáo viên</a></li>
							<li><a href="qlhocsinh.php">Học sinh</a></li>
							<li><a href="qllop.php">Lớp</a></li>
						</ul>
					  </li>
					</ul>
				  </div>
			</nav>
		</div>
</div>