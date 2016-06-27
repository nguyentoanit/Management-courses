<?php 
	include("header-submenu.php");
?>
<div class="container">
	<p class="main-title">Trang quản lý cán bộ</p>
	<p class="sub-title">Xem danh sách cán bộ trong trường</p>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<form class="form-group" style="overflow: hidden;" method="GET" >
				<div class="col-md-7 searchbox">
					<input type="text" placeholder="Nhập mã giáo viên" required name="magiaovien" class="form-control"/>      
				</div>
				<div class="col-md-2 searchbutton">
					<button type="submit" class="btn btn-warning">Tìm kiếm</button>
				</div>
			</form>
			<?php
				if(isset($_REQUEST['magiaovien'])){
					$key = $_REQUEST['magiaovien'];
					$sql = "select * from canbo where cb_macanbo=".$key.";";
				}else {
					$sql = "select * from canbo;";
				}
			?>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã cán bộ</th>
						<th>Tên cán bộ</th>
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
						echo "<td>".$row['cb_macanbo']."</td>";
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
</div>
</body>