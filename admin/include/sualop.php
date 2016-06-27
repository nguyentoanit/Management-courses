<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql = "update lop set l_tenlop = '".$_REQUEST['tenlop']."',l_phong = '".$_REQUEST['phong']."',l_magiaovien = ".$_REQUEST['magiaovien']." where l_malop =".$_REQUEST['malop'];
	mysql_query($sql);
	echo "<script>alert('Cập nhật lớp thành công!');location.href='../index.php?trang=lop';</script>"
?>