<meta charset='utf-8'>
<?php
include('../include/connectdb.php');
session_start();
$check = 'select * from user join quyen on user.u_quyen=quyen.maquyen where u_username = "'.$_REQUEST['username'].'" and u_password = "'.$_REQUEST['password'].'"';
$kq=mysql_query($check);
$num = mysql_num_rows($kq);
if($num){
	$row=mysql_fetch_array($kq);
	$_SESSION['username'] = $_REQUEST['username'];
	$_SESSION['quyen'] = $row['tenquyen'];
	echo "<script>alert('Bạn đã đăng nhập thành công!');location.href='index.php'</script>";
}else{
	echo "<script>alert('Tài khoản hoặc mật khẩu không chinh xác!');location.href='login.html';</script>";
}
?>