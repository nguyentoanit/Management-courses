<?php 
	include("header-submenu.php");
?>
<div class="container">
	<p class="main-title">Trang quản lý học sinh</p>
	<p class="sub-title">Xem danh sách học sinh trong trường</p>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form class="form-group" method="GET" >
					<div class="col-md-7 searchbox">
						<input type="text" placeholder="Tìm kiếm" required name="search-box" class="form-control"/>      
					</div>
					<div class=" col-md-2 searchbutton">
						<button type="submit" class="btn btn-warning">Tìm kiếm</button>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input type="radio" name="advanced" value="0" checked>Theo mã học sinh
						<input type="radio" name="advanced" value="1">Theo tên học sinh
						<input type="radio" name="advanced" value="2">Theo lớp
					</div>
				</form>
		</div>
	</div>
	<?php
	if(isset($_REQUEST['search-box'])){
		$fillter = $_REQUEST['advanced'];
		$key = $_REQUEST['search-box'];
		switch($fillter){
			case 0:
				$sql="select * from diem as d join hocsinh as hs on d.d_mahocsinh = hs.hs_mahs join monhoc as mh on d.d_mamonhoc = mh.mh_mamonhoc join canbo as cb on mh.mh_magiaovien = cb.cb_macanbo where hs.hs_mahs = ".$key.";";
				break;
			case 1:
				$sql="select * from hocsinh as hs join lop as l on hs.hs_malop = l.l_malop where hs.hs_hoten like '%".$key."%' group by hs.hs_mahs";
				break;
			case 2:
				$sql="select * from hocsinh as hs join lop as l on hs.hs_malop = l.l_malop where l.l_tenlop like '%".$key."%' group by hs.hs_mahs";
				break;
		}
	}
?>
<?php 
	if(isset($_REQUEST['search-box'])){
		$stt=1;
		$kq=mysql_query($sql);
		if ($_REQUEST['advanced']==0){
			$result=mysql_query("select * from hocsinh as hs join lop as l on hs.hs_malop = l.l_malop where hs_mahs=".$key);
			$infor=mysql_fetch_array($result);
?>
<div class="student-infor">
	<p class="sub-title">Thông tin học sinh</p>
	<table class="table table-striped table-bordered table-hover">
		<tbody>
			<tr>
				<th>Mã học sinh</th>
				<td><?php echo $infor['hs_mahs']; ?></td>
			</tr>
			<tr>
				<th>Họ tên</th>
				<td><?php echo $infor['hs_hoten']; ?></td>
			</tr>
			<tr>
				<th>Lớp</th>
				<td><?php echo $infor['l_tenlop']; ?></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><?php echo $infor['hs_diachi']; ?></td>
			</tr>
			<tr>
				<th>Giới tính</th>
				<td><?php if($infor['hs_gioitinh']) echo 'Nam'; else echo 'Nữ';?></td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><?php echo $infor['hs_sdt']; ?></td>
			</tr>
			
		</tbody>
	</table>
</div>
<p class="sub-title">Kết quả học tập</p>

<div class="row">
	<form class="form-group" method="GET">
		<div style="display:none;">
			<input type="text" name="search-box" value="<?php echo $_REQUEST['search-box']; ?>"/>
			<input type="text" name="advanced" value="<?php echo $_REQUEST['advanced']; ?>"/>
		</div>
		<div class="col-md-3">
			<?php
				$ki1=$ki2=$canam="";
				if(isset($_REQUEST['ki'])){
					if($_REQUEST['ki']=='1') $ki1='selected';
					elseif($_REQUEST['ki']=='2') $ki2='selected';
					else $canam='selected';
				}
			?>
			<select class="form-control" name="ki">
				<option value="1" <?php echo $ki1; ?>>Kì 1</option>
				<option value="2" <?php echo $ki2; ?>>Kì 2</option>
				<option value="0" <?php echo $canam; ?>>Cả năm</option>
			</select>
		</div>
		<div class="col-md-3">
			<select class="form-control" name="namhoc">
			<?php
				$namhocsql="select distinct d_namhoc from diem ";
				$nhresult=mysql_query($namhocsql);
				while($namhoc=mysql_fetch_array($nhresult)){
			?>
			<option value="<?php echo $namhoc['d_namhoc']; ?>" <?php if(isset($_REQUEST['namhoc'])){if($_REQUEST['namhoc']==$namhoc['d_namhoc']) echo 'selected';} ?> ><?php echo $namhoc['d_namhoc']; ?></option>
			<?php
				}
			?>
			</select>
		</div>
		<div class="col-md-3">
			<input class="btn btn-success" type="submit" value="Xem" />
		</div>
	</form>
	</br></br>
</div>
<?php 
if(isset($_REQUEST['ki'])){
	if($_REQUEST['ki']=='0'){
		$thongkesql="select * from diem as d join hocsinh as hs on d.d_mahocsinh = hs.hs_mahs join monhoc as mh on d.d_mamonhoc = mh.mh_mamonhoc join canbo as cb on mh.mh_magiaovien = cb.cb_macanbo where d_namhoc='".$_REQUEST['namhoc']."'and hs.hs_mahs = ".$key;
	}else{
		$thongkesql="select * from diem as d join hocsinh as hs on d.d_mahocsinh = hs.hs_mahs join monhoc as mh on d.d_mamonhoc = mh.mh_mamonhoc join canbo as cb on mh.mh_magiaovien = cb.cb_macanbo where d_ki=".$_REQUEST['ki']." and d_namhoc='".$_REQUEST['namhoc']."' and hs.hs_mahs = ".$key;
	}
	$kq=mysql_query($thongkesql);
}
?>
<?php
	if(mysql_num_rows($kq)=='0'){
		echo "<h3>Chưa có thông tin!</h3>";
	}else{
?>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên môn học</th>
			<th>Kì</th>
			<th>Năm học</th>
			<th>Giáo viên</th>
			<th>Điểm hệ số 1</th>
			<th>Điểm hệ số 2</th>
			<th>Điểm hệ số 3</th>
			<th>Điểm trung bình</th>
		</tr>
	</thead>
	<tbody>
	<?php
		while($row=mysql_fetch_array($kq)){
			echo "<tr>";
			echo '<td>'.$stt.'</td>';
			echo "<td>".$row['mh_tenmonhoc']."</td>";
			echo "<td>".$row['d_ki']."</td>";
			echo "<td>".$row['d_namhoc']."</td>";
			echo "<td>".$row['cb_hoten']."</td>";
			echo "<td>".$row['d_heso1']."</td>";
			echo "<td>".$row['d_heso2']."</td>";
			echo "<td>".$row['d_heso3']."</td>";
			echo "<td>".$row['d_trungbinh']."</td>";
			echo "</tr>";
			$stt++;
		}
	?>
	</tbody>
</table>
<?php
	if(isset($_REQUEST['ki'])){
		if($_REQUEST['ki']!='0'){
			$tong=0.0;
			$dem=0;
			$kq=mysql_query($thongkesql);
			while($row=mysql_fetch_array($kq)){
				$mon=mb_strtoupper($row['mh_tenmonhoc'],"UTF-8");
					if($mon=="TOÁN" || $mon=="NGỮ VĂN"){
						$dem+=2;
						$tong+=$row['d_trungbinh']*2;
					}elseif($mon=="THỂ DỤC" || $mon=="ÂM NHẠC" || $mon=="MỸ THUẬT" || $mon=="MĨ THUẬT"){
						continue;
					}
					else{
						$dem+=1;
						$tong+=$row['d_trungbinh'];
					}
			}
			echo "<h4>Điểm trung bình học kì ".$_REQUEST['ki'].": ".round($tong/$dem,2)."</h4>";
		}else{
			$ki1=$ki2=0.0;
			$dem1=$dem2=0;
			$kq=mysql_query($thongkesql);
			while($row=mysql_fetch_array($kq)){
				$mon=mb_strtoupper($row['mh_tenmonhoc'],"UTF-8");
					if($mon=="TOÁN" || $mon=="NGỮ VĂN"){
						if($row['d_ki']=='1'){
							$dem1+=2;
							$ki1+=$row['d_trungbinh']*2;
						}elseif ($row['d_ki']=='2'){
							$dem2+=2;
							$ki2+=$row['d_trungbinh']*2;
						}
					}elseif($mon=="THỂ DỤC" || $mon=="ÂM NHẠC" || $mon=="MỸ THUẬT" || $mon=="MĨ THUẬT"){
						continue;
					}
					else{
						if($row['d_ki']=='1'){
							$dem1+=1;
							$ki1+=$row['d_trungbinh'];
						}elseif ($row['d_ki']=='2'){
							$dem2+=1;
							$ki2+=$row['d_trungbinh'];
						}
					}
			}
			echo "<h4>Điểm trung bình học kì 1: ".round($ki1/$dem1,2)."</h4>";
			echo "<h4>Điểm trung bình học kì 2: ".round($ki2/$dem2,2)."</h4>";
			echo "<h4>Điểm trung bình cả năm: ".((round($ki1/$dem1,2)+round($ki2/$dem2,2)*2)/3)."</h4>";
		}
	}
	
} ?>
<?php }elseif ($_REQUEST['advanced'] == 1){
?>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Mã học sinh</th>
			<th>Tên học sinh</th>
			<th>Lớp</th>
			<th>Địa chỉ</th>
		</tr>
	</thead>
	<tbody>
	<?php
		while($row=mysql_fetch_array($kq)){
			echo "<tr>";
			echo '<td>'.$stt.'</td>';
			echo '<td><a href="qlhocsinh.php?search-box='.$row['hs_mahs'].'&advanced=0">'.$row['hs_mahs'].'</a></td>';
			echo '<td><a href="qlhocsinh.php?search-box='.$row['hs_mahs'].'&advanced=0">'.$row['hs_hoten'].'</a></td>';
			echo '<td>'.$row['l_tenlop'].'</td>';
			echo '<td>'.$row['hs_diachi'].'</td>';
			echo '</tr>';
			$stt++;
		}
	?>
	</tbody>
</table>
	<?php
}else {
	?>
	<p class="sub-title">Danh sách học sinh lớp <?php echo $key; ?></p>
	<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Mã học sinh</th>
			<th>Tên học sinh</th>
			<th>Địa chỉ</th>
		</tr>
	</thead>
	<tbody>
	<?php
	while($row=mysql_fetch_array($kq)){
		echo "<tr>";
		echo '<td>'.$stt.'</td>';
		echo '<td><a href="qlhocsinh.php?search-box='.$row['hs_mahs'].'&advanced=0">'.$row['hs_mahs'].'</a></td>';
		echo '<td><a href="qlhocsinh.php?search-box='.$row['hs_mahs'].'&advanced=0">'.$row['hs_hoten'].'</a></td>';
		echo '<td>'.$row['hs_diachi'].'</td>';
		echo '</tr>';
		$stt++;
	}
}
}
?>
</div>
