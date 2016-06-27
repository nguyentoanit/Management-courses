<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql="INSERT INTO hocsinh VALUES ('',".$_REQUEST['lop'].",'".$_REQUEST['hoten']."','".$_REQUEST['ngaysinh']."','".$_REQUEST['diachi']."','".$_REQUEST['gioitinh']."','".$_REQUEST['sdt']."')";
	mysql_query($sql);
	echo "<script>alert('Thêm mới học sinh thành công!');location.href='../index.php?trang=hocsinh';</script>";
?>