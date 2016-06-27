<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from hocsinh where hs_mahs =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=hocsinh';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from hocsinh join lop on hocsinh.hs_malop=lop.l_malop where hs_mahs ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$hocsinh=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý học sinh</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa học sinh</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa học sinh</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suahocsinh.php">
									<div class="row">
										<div class="col-md-6">
											<input style="display: none" type="text" value="<?php echo $hocsinh['hs_mahs'] ?>" name="mahocsinh" class="form-control"/>
											<label>Tên học sinh:</label>
											<input type="text" value="<?php echo $hocsinh['hs_hoten'] ?>" name="hoten" class="form-control" placeholder="Nhập tên học sinh..." required />
											<label>Giới tính:</label>
											<select class="form-control" name="gioitinh">
												<?php
													$nam=$nu="";
													if($hocsinh['hs_gioitinh']) $nam="selected"; else $nu="selected";
												?>
												<option value="0" <?php echo $nu; ?>>Nữ</option>
												<option value="1" <?php echo $nam; ?>>Nam</option>
											</select>
											<label>Lớp:</label>
											<select class="form-control" name="lop">
											<?php
												$sqllop="select l_malop,l_tenlop from lop;";
												$resultlop=mysql_query($sqllop);
												while($dslop=mysql_fetch_array($resultlop)){
											?>
												<option value="<?php echo $dslop['l_malop']; ?>" <?php if($dslop['l_malop']==$hocsinh['hs_gioitinh']) echo 'selected'; ?> ><?php echo $dslop['l_tenlop']; ?></option>
											<?php }?>
											</select>
										</div>
										<div class="col-md-6">
											<label>Đỉa chỉ:</label>
											<input type="text" value="<?php echo $hocsinh['hs_diachi'] ?>" name="diachi" class="form-control" placeholder="Nhập địa chỉ..." />
											<label>Số điện thoại:</label>
											<input type="text" value="<?php echo $hocsinh['hs_sdt'] ?>" name="sdt" class="form-control" placeholder="Nhập SĐT..." />
											<label>Ngày sinh:</label>
											<input type="date" name="ngaysinh" class="form-control"/>
										</div>
									</div>
									</br>
									<input type="submit" value="Sửa học sinh" class="btn btn-danger" />
								</form>
							</div>
						</div>
					</div>
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Danh sách học sinh
                        </div>
                        <div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Mã học sinh</th>
								<th>Tên học sinh</th>
								<th>Giới tính</th>
								<th>Ngày sinh</th>
								<th>Lớp</th>
								<th>Địa chỉ</th>
								<th>Số điện thoại</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "select *, DATE_FORMAT(hs_ngaysinh,'%d/%m/%Y') as ns from hocsinh join lop on hs_malop=l_malop;";
								$kq=mysql_query($sql);
								while($row=mysql_fetch_array($kq)){
							?>
							<tr>
								<td><?php echo $row['hs_mahs']; ?></td>
								<td><?php echo $row['hs_hoten']; ?></td>
								<td><?php if($row['hs_gioitinh']) echo "Nam"; else echo 'Nữ'; ?></td>
								<td><?php echo $row['ns']; ?></td>
								<td><?php echo $row['l_tenlop']; ?></td>
								<td><?php echo $row['hs_diachi']; ?></td>
								<td><?php echo $row['hs_sdt']; ?></td>
								<td style="width:7%">
									<a href="?trang=hocsinh&action=modify&id=<?php echo $row['hs_mahs']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=hocsinh&action=delete&id=<?php echo $row['hs_mahs']; ?>"><i class="fa fa-trash"></i></a>
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
                           <strong>Thêm học sinh</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoihocsinh.php">
								<div class="row">
									<div class="col-md-6">
									<label>Tên học sinh:</label>
									<input type="text" name="hoten" class="form-control" placeholder="Nhập tên học sinh..." required />
									<label>Giới tính:</label>
									<select class="form-control" name="gioitinh">
										<option value="0">Nữ</option>
										<option value="1">Nam</option>
									</select>
									<label>Lớp:</label>
									<select class="form-control" name="lop">
									<?php
										$sqllop="select l_malop,l_tenlop from lop;";
										$resultlop=mysql_query($sqllop);
										while($dslop=mysql_fetch_array($resultlop)){
									?>
										<option value="<?php echo $dslop['l_malop']; ?>"><?php echo $dslop['l_tenlop']; ?></option>
									<?php }?>
									</select>
									</div>
									<div class="col-md-6">
									<label>Đỉa chỉ:</label>
									<input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ..." />
									<label>Số điện thoại:</label>
									<input type="text" name="sdt" class="form-control" placeholder="Nhập SĐT..." />
									<label>Ngày sinh:</label>
									<input type="date" name="ngaysinh" class="form-control"/>
									</div>
								</div>
								</br>
								<input type="submit" value="Thêm học sinh" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>