<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql = "update canbo set cb_hoten = '".$_REQUEST['tencanbo']."',cb_gioitinh = ".$_REQUEST['gioitinh'].", cb_ngaysinh = '".$_REQUEST['ngaysinh']."', cb_ngaylam = '".$_REQUEST['ngaycongtac']."', cb_chucvu = '".$_REQUEST['chucvu']."', cb_bomon = '".$_REQUEST['bomon']."', cb_diachi = '".$_REQUEST['diachi']."', cb_sdt = '".$_REQUEST['sdt']."', cb_email = '".$_REQUEST['email']."', cb_tinhtrang = ".$_REQUEST['tinhtrang']." where cb_macanbo =".$_REQUEST['macanbo'];
	mysql_query($sql);
	echo "<script>alert('Cập nhật cán bộ thành công!');location.href='../index.php?trang=canbo';</script>"
?>