<?php 
	include("header-submenu.php");
?>
<div class="container">
	<p class="main-title">Trang quản lý lớp</p>
	<p class="sub-title">Xem danh sách lớp trong trường</p>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên lớp</th>
						<th>Phòng</th>
						<th>Tên giáo viên</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=1;
						$sql = "select * from lop as l join canbo as cb on l.l_magiaovien=cb.cb_macanbo;";
						$kq=mysql_query($sql);
						while($row=mysql_fetch_array($kq)){
					?>
					<tr>
						<td style="width:3%"><?php echo $i++; ?></td>
						<td><?php echo $row['l_tenlop'];; ?></td>
						<td><?php echo $row['l_phong']; ?></td>
						<td><?php echo $row['cb_hoten']; ?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>