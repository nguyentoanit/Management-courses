<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	if($_REQUEST['matkhau']==$_REQUEST['nhaplaimatkhau']){
		$sql = "update user set u_username = '".$_REQUEST['tentaikhoan']."',u_password = '".$_REQUEST['matkhau']."',u_quyen = ".$_REQUEST['quyen']." where u_mauser =".$_REQUEST['mauser'];
		mysql_query($sql);
		echo "<script>alert('Sửa tài khoản thành công!');location.href='../index.php?trang=taikhoan';</script>";
	}else{
		echo "<script>alert('Bạn phải nhập mật khẩu trùng nhau!');location.href='../index.php?trang=taikhoan';</script>";
	}
?>