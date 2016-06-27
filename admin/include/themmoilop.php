<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql="INSERT INTO lop(l_magiaovien,l_tenlop,l_phong) VALUES (".$_REQUEST['magiaovien'].",'".$_REQUEST['tenlop']."','".$_REQUEST['phong']."')";
	mysql_query($sql);
	echo "<script>alert('Thêm mới lớp thành công!');location.href='../index.php?trang=lop';</script>";
?>