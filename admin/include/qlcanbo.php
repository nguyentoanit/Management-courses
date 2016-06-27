<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from canbo where cb_macanbo =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=canbo';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from canbo where cb_macanbo ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$canbo=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý cán bộ</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá cán bộ</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa cán bộ</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suacanbo.php">
									<div class="row">
										<div class="col-md-6">
										<label>Mã cán bộ:</label>
										<input class="form-control" value="<?php echo $canbo['cb_macanbo']; ?>" type="text" name="macanbo" readonly="true" />
										<label>Tên cán bộ:</label>
										<input class="form-control" value="<?php echo $canbo['cb_hoten']; ?>" type="text" name="tencanbo" placeholder="Nhập tên cán bộ..." required />
										<label>Giới tính:</label>
										<?php 
											$nam=$nu="";
											if($canbo['cb_hoten']) $nam="selected"; else $nu="selected"; 
										?>
										<select class="form-control" name="gioitinh">
											<option <?php echo $nam; ?> value="0">Nữ</option>
											<option <?php echo $nu; ?> value="1">Nam</option>
										</select>
										<label>Ngày sinh:</label>
										<input type="date" name="ngaysinh" class="form-control" required />
										<label>Ngày bắt đầu công tác:</label>
										<input type="date" name="ngaycongtac" class="form-control" required />
										<label>Chức vụ:</label>
										<input class="form-control" value="<?php echo $canbo['cb_chucvu']; ?>" type="text" name="chucvu" placeholder="Nhập chức vụ..." required />
										</div>
										<div class="col-md-6">
										<label>Bộ môn:</label>
										<input class="form-control" value="<?php echo $canbo['cb_bomon']; ?>" type="text" name="bomon" placeholder="Nhập bộ môn..." required />
										<label>Đỉa chỉ:</label>
										<textarea class="form-control" name="diachi" placeholder="Nhập địa chỉ..." ><?php echo $canbo['cb_diachi']; ?></textarea>
										<label>Số điện thoại:</label>
										<input class="form-control" value="<?php echo $canbo['cb_sdt']; ?>" type="text" name="sdt" placeholder="Nhập SĐT..." />
										<label>Email:</label>
										<input class="form-control" value="<?php echo $canbo['cb_email']; ?>" type="email" name="email" placeholder="Nhập Email..."/>
										<?php 
											$nghi=$hoatdong="";
											if($canbo['cb_tinhtrang']) $nghi="selected"; else $hoatdong="selected"; 
										?>
										<label>Tình trạng công tác:</label>
										<select class="form-control" name="tinhtrang">
											<option <?php echo $nghi; ?> value="0">Tạm nghỉ</option>
											<option <?php echo $hoatdong; ?> value="1">Đang giảng dạy</option>
										</select>
										</div>
									</div>
									</br>
									<input type="submit" value="Sửa cán bộ" class="btn btn-danger" />
								</form>
							</div>
						</div>
					</div>
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Danh sách cán bộ
                        </div>
                        <div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Mã cán bộ</th>
								<th>Tên cán bộ</th>
								<th>Giới tính</th>
								<th>Ngày sinh</th>
								<th>Ngày bắt đầu công tác</th>
								<th>Chức vụ</th>
								<th>Bộ môn</th>
								<th>Địa chỉ</th>
								<th>Số điện thoại</th>
								<th>Email</th>
								<th>Tình trạng công tác</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "select *, DATE_FORMAT(cb_ngaysinh,'%d/%m/%Y') as ns, DATE_FORMAT(cb_ngaylam,'%d/%m/%Y') as nl from canbo;";
								$kq=mysql_query($sql);
								while($row=mysql_fetch_array($kq)){
							?>
							<tr>
								<td><?php echo $row['cb_macanbo']; ?></td>
								<td><?php echo $row['cb_hoten'];; ?></td>
								<td><?php if($row['cb_gioitinh']) echo "Nam"; else echo 'Nữ'; ?></td>
								<td><?php echo $row['ns']; ?></td>
								<td><?php echo $row['nl']; ?></td>
								<td><?php echo $row['cb_chucvu']; ?></td>
								<td><?php echo $row['cb_bomon']; ?></td>
								<td><?php echo $row['cb_diachi']; ?></td>
								<td><?php echo $row['cb_sdt']; ?></td>
								<td><?php echo $row['cb_email']; ?></td>
								<td><?php if($row['cb_tinhtrang']) echo "Đang giảng dạy"; else echo 'Tạm nghỉ'; ?></td>
								<td style="width:7%">
									<a href="?trang=canbo&action=modify&id=<?php echo $row['cb_macanbo']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=canbo&action=delete&id=<?php echo $row['cb_macanbo']; ?>"><i class="fa fa-trash"></i></a>
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
                           <strong>Thêm cán bộ</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoicanbo.php">
								<div class="row">
									<div class="col-md-6">
									<label>Tên cán bộ:</label>
									<input type="text" name="tencanbo" class="form-control" placeholder="Nhập tên cán bộ..." required />
									<label>Giới tính:</label>
									<select class="form-control" name="gioitinh">
										<option value="0">Nữ</option>
										<option value="1">Nam</option>
									</select>
									<label>Ngày sinh:</label>
									<input type="date" name="ngaysinh" class="form-control" required />
									<label>Ngày bắt đầu công tác:</label>
									<input type="date" name="ngaycongtac" class="form-control" required />
									<label>Chức vụ:</label>
									<input type="text" name="chucvu" class="form-control" placeholder="Nhập chức vụ..." required />
									</div>
									<div class="col-md-6">
									<label>Bộ môn:</label>
									<input type="text" name="bomon" class="form-control" placeholder="Nhập bộ môn..." required />
									<label>Đỉa chỉ:</label>
									<input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ..." />
									<label>Số điện thoại:</label>
									<input type="text" name="sdt" class="form-control" placeholder="Nhập SĐT..." />
									<label>Email:</label>
									<input type="email" name="email" class="form-control" placeholder="Nhập Email..."/>
									<label>Tình trạng công tác:</label>
									<select class="form-control" name="tinhtrang">
										<option value="0">Tạm nghỉ</option>
										<option value="1">Đang giảng dạy</option>
									</select>
									</div>
								</div>
								</br>
								<input type="submit" value="Thêm cán bộ" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>