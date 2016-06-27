<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	$sql = "update hocsinh set hs_hoten = '".$_REQUEST['hoten']."',hs_gioitinh = ".$_REQUEST['gioitinh'].", hs_ngaysinh = '".$_REQUEST['ngaysinh']."', hs_malop = ".$_REQUEST['lop'].",hs_diachi = '".$_REQUEST['diachi']."', hs_sdt = '".$_REQUEST['sdt']."' where hs_mahs =".$_REQUEST['mahocsinh'];
	mysql_query($sql);
	echo "<script>alert('Cập nhật học sinh thành công!');location.href='../index.php?trang=hocsinh';</script>"
?>