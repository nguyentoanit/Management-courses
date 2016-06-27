<meta charset="utf-8" />
<?php
	include("../../include/connectdb.php");
	if($_REQUEST['matkhau']==$_REQUEST['nhaplaimatkhau']){
		$sql="INSERT INTO user(u_username,u_password,u_quyen) VALUES ('".$_REQUEST['tentaikhoan']."','".$_REQUEST['matkhau']."',".$_REQUEST['quyen'].")";
		mysql_query($sql);
		echo "<script>alert('Thêm mới tài khoản thành công!');location.href='../index.php?trang=taikhoan';</script>";
	}else {
		echo "<script>alert('Bạn phải nhập mật khẩu trùng nhau!');location.href='../index.php?trang=taikhoan';</script>";
	}
?>