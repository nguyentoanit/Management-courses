<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql="INSERT INTO canbo VALUES ('','".$_REQUEST['tencanbo']."',".$_REQUEST['gioitinh'].",'".$_REQUEST['ngaysinh']."','".$_REQUEST['ngaycongtac']."','".$_REQUEST['chucvu']."','".$_REQUEST['bomon']."','".$_REQUEST['diachi']."','".$_REQUEST['sdt']."','".$_REQUEST['email']."',".$_REQUEST['tinhtrang'].")";
	mysql_query($sql);
	echo "<script>alert('Thêm mới cán bộ thành công!');location.href='../index.php?trang=canbo';</script>";
?>