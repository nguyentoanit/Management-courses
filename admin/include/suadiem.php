<meta charset="utf-8" />
<?php
	$tb=round(((float)$_REQUEST['heso1']+(float)$_REQUEST['heso2']*2+(float)$_REQUEST['heso3']*3)/6,2);
	include("../../include/connectdb.php");
	$sql = "update diem set d_mahocsinh = ".$_REQUEST['mahocsinh'].",d_mamonhoc = ".$_REQUEST['mamonhoc']." ,d_ki = ".$_REQUEST['ki'].",d_namhoc = '".$_REQUEST['namhoc']."',d_heso1 = ".$_REQUEST['heso1'].",d_heso2 = ".$_REQUEST['heso2'].",d_heso3 = ".$_REQUEST['heso3'].",d_trungbinh=".$tb." where d_madiem =".$_REQUEST['madiem'];
	mysql_query($sql);
	echo "<script>alert('Cập nhật điểm thành công!');location.href='../index.php?trang=diem';</script>"
?>