<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql="INSERT INTO monhoc VALUES ('','".$_REQUEST['tenmonhoc']."',".$_REQUEST['canbo'].")";
	mysql_query($sql);
	echo "<script>alert('Thêm mới môn học thành công!');location.href='../index.php?trang=monhoc';</script>"
?>