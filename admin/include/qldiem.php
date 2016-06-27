<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from diem where d_madiem =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=diem';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from diem where d_madiem ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$diem=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý điểm cho học sinh</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá điểm</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa điểm</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suadiem.php">
									<div class="row">
										<div class="col-md-6">
											<input class="form-control" style="display:none;" value="<?php echo $_REQUEST['id']; ?>" name="madiem" />
											<label>Mã học sinh:</label>
											<select name="mahocsinh" class="form-control">
											<?php
												$sqlhocsinh="select hs_mahs from hocsinh";
												$kqhocsinh=mysql_query($sqlhocsinh);
												while($dshocsinh=mysql_fetch_array($kqhocsinh)){
											?>
											<option value="<?php echo $dshocsinh['hs_mahs'];?>" <?php if($dshocsinh['hs_mahs']==$diem['d_mahocsinh']) echo 'selected'; ?>><?php echo $dshocsinh['hs_mahs']; ?></option>
											<?php
												}
											?>
											</select>
											<label>Kì:</label>
											<?php 
												$ki1=$ki2="";
												if($diem['d_ki']==1) $ki1="selected";
												else $ki2="selected";
											?>
											<select name="ki" class="form-control">
												<option value="1" <?php echo $ki1; ?>>1</option>
												<option value="2" <?php echo $ki2; ?>>2</option>
											</select>
										</div>
										<div class="col-md-6">
											<label>Mã môn học:</label>
											<select name="mamonhoc" class="form-control">
											<?php
												$sqlmonhoc="select mh_mamonhoc from monhoc";
												$kqmonhoc=mysql_query($sqlmonhoc);
												while($dsmonhoc=mysql_fetch_array($kqmonhoc)){
											?>
											<option value="<?php echo $dsmonhoc['mh_mamonhoc']; ?>" <?php if($dsmonhoc['mh_mamonhoc']==$diem['d_mamonhoc']) echo 'selected'; ?> ><?php echo $dsmonhoc['mh_mamonhoc']; ?></option>
											<?php
												}
											?>
											</select>
											<label>Năm học:</label>
											<input class="form-control" value="<?php echo $diem['d_namhoc']; ?>" name="namhoc" placeholder="Nhập năm học..." />
										</div>
										<div class="col-md-4">
											<label>Điểm hệ số 1:</label>
											<input class="form-control" value="<?php echo $diem['d_heso1']; ?>" name="heso1" placeholder="Điểm hệ số 1..." />
										</div>
										<div class="col-md-4">
											<label>Điểm hệ số 2:</label>
											<input class="form-control" value="<?php echo $diem['d_heso2']; ?>" name="heso2" placeholder="Điểm hệ số 2..." />
										</div>
										<div class="col-md-4">
											<label>Điểm hệ số 3:</label>
											<input class="form-control" value="<?php echo $diem['d_heso3']; ?>" name="heso3" placeholder="Điểm hệ số 3..." />
										</div>
									</div>
									</br>
									<input type="submit" value="Cập nhật" class="btn btn-success" />
								</form>
							</div>
						</div>
					</div>
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Danh sách điểm
                        </div>
                        <div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên học sinh</th>
								<th>Tên môn học</th>
								<th>Kì</th>
								<th>Năm học</th>
								<th>Hệ số 1</th>
								<th>Hệ số 2</th>
								<th>Hệ số 3</th>
								<th>Trung bình</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=1;
								$sql = "select * from diem as d join hocsinh as hs on d.d_mahocsinh=hs.hs_mahs join monhoc as mh on d.d_mamonhoc=mh.mh_mamonhoc;";
								$kq=mysql_query($sql);
								while($row=mysql_fetch_array($kq)){
							?>
							<tr>
								<td style="width:3%"><?php echo $i++; ?></td>
								<td><?php echo $row['hs_hoten']; ?></td>
								<td><?php echo $row['mh_mamonhoc']." - ".$row['mh_tenmonhoc']; ?></td>
								<td><?php echo $row['d_ki']; ?></td>
								<td><?php echo $row['d_namhoc']; ?></td>
								<td><?php echo $row['d_heso1']; ?></td>
								<td><?php echo $row['d_heso2']; ?></td>
								<td><?php echo $row['d_heso3']; ?></td>
								<td><?php echo $row['d_trungbinh']; ?></td>
								<td style="width:7%">
									<a href="?trang=diem&action=modify&id=<?php echo $row['d_madiem']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=diem&action=delete&id=<?php echo $row['d_madiem']; ?>"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
                    </div>
				   </div>
				   <hr>
					<div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Thêm điểm cho học sinh</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoidiem.php">
								<div class="row">
									<div class="col-md-6">
										<label>Mã học sinh:</label>
										<select name="mahocsinh" class="form-control">
										<?php
											$sqlhocsinh="select hs_mahs from hocsinh";
											$kqhocsinh=mysql_query($sqlhocsinh);
											while($dshocsinh=mysql_fetch_array($kqhocsinh)){
										?>
										<option value="<?php echo $dshocsinh['hs_mahs']; ?>"><?php echo $dshocsinh['hs_mahs']; ?></option>
										<?php
											}
										?>
										</select>
										<label>Kì:</label>
										<select name="ki" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
									
									<div class="col-md-6">
										<label>Mã môn học:</label>
										<select name="mamonhoc" class="form-control">
										<?php
											$sqlmonhoc="select mh_mamonhoc from monhoc";
											$kqmonhoc=mysql_query($sqlmonhoc);
											while($dsmonhoc=mysql_fetch_array($kqmonhoc)){
										?>
										<option value="<?php echo $dsmonhoc['mh_mamonhoc']; ?>"><?php echo $dsmonhoc['mh_mamonhoc']; ?></option>
										<?php
											}
										?>
										</select>
										<label>Năm học:</label>
										<input class="form-control" name="namhoc" placeholder="Nhập năm học..." />
									</div>
									<div class="col-md-4">
										<label>Điểm hệ số 1:</label>
										<input class="form-control" name="heso1" placeholder="Điểm hệ số 1..." />
									</div>
									<div class="col-md-4">
										<label>Điểm hệ số 2:</label>
										<input class="form-control" name="heso2" placeholder="Điểm hệ số 2..." />
									</div>
									<div class="col-md-4">
										<label>Điểm hệ số 3:</label>
										<input class="form-control" name="heso3" placeholder="Điểm hệ số 3..." />
									</div>
								</div>
								</br>
								<input type="submit" value="Thêm điểm" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>