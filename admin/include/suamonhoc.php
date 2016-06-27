<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql = "update monhoc set mh_tenmonhoc = '".$_REQUEST['tenmonhoc']."',mh_magiaovien = ".$_REQUEST['canbo']." where mh_mamonhoc =".$_REQUEST['mamonhoc'];
	mysql_query($sql);
	echo "<script>alert('Cập nhật môn học thành công!');location.href='../index.php?trang=monhoc';</script>"
?>