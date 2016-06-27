<?php 
	include("header-submenu.php");
?>
<div class="container">
	<p class="main-title">Trang quản lý môn học</p>
	<p class="sub-title">Xem danh sách các môn học</p>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form class="form-group" style="overflow: hidden;" action="" method="GET" >
			<div class="col-md-7 searchbox">
				<input type="text" placeholder="Nhập mã môn học" required name="mamonhoc" class="form-control"/>      
			</div>
			<div class="col-md-2 searchbutton">
				<button type="submit" class="btn btn-warning">Tìm kiếm</button>
			</div>
		</form>
	<?php
	if(isset($_REQUEST['mamonhoc'])){
		$key = $_REQUEST['mamonhoc'];
		$sql = "select * from monhoc as mh join canbo as cb on mh.mh_magiaovien = cb.cb_macanbo where mh_mamonhoc=".$key.";";
	}else {
		$sql = "select * from monhoc as mh join canbo as cb on mh.mh_magiaovien = cb.cb_macanbo;";
	}
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã môn học</th>
				<th>Tên giáo viên</th>
				<th>Chức vụ</th>
				<th>Bộ môn</th>
				<th>Điện thoại</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$kq=mysql_query($sql);
			$stt=1;
			while($row=mysql_fetch_array($kq)){
				echo "<tr>";
				echo "<td>".$stt."</td>";
				echo "<td>".$row['mh_mamonhoc']."-".$row['mh_tenmonhoc']."</td>";
				//echo "<td>".$row['mh_tenmonhoc']."</td>";
				echo "<td>".$row['cb_hoten']."</td>";
				echo "<td>".$row['cb_chucvu']."</td>";
				echo "<td>".$row['cb_bomon']."</td>";
				echo "<td>".$row['cb_sdt']."</td>";
				echo "</tr>";
				$stt++;
			}
		?>
		</tbody>
	</table>
	</div>
</div>
</body>