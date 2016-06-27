<meta charset="utf-8" />
<?php
	$tb=round(((float)$_REQUEST['heso1']+(float)$_REQUEST['heso2']*2+(float)$_REQUEST['heso3']*3)/6,2);
	include("../../include/connectdb.php");
	$sql="INSERT INTO diem(d_mahocsinh,d_mamonhoc,d_ki,d_namhoc,d_heso1,d_heso2,d_heso3,d_trungbinh) VALUES (".$_REQUEST['mahocsinh'].",'".$_REQUEST['mamonhoc']."',".$_REQUEST['ki'].",'".$_REQUEST['namhoc']."',".$_REQUEST['heso1'].",".$_REQUEST['heso2'].",".$_REQUEST['heso3'].",".$tb.")";
	mysql_query($sql);
	echo "<script>alert('Thêm mới điểm thành công!');location.href='../index.php?trang=diem';</script>";
?>