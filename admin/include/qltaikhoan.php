<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from user where u_mauser =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=taikhoan';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from user where u_mauser ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$taikhoan=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý tài khoản</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá tài khoản</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa tài khoản</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suataikhoan.php">
									<div class="row">
										<div class="col-md-6">
											<input class="form-control" style="display:none;" value="<?php echo $taikhoan['u_mauser']; ?>" type="text" name="mauser"/>
											<label>Tên tài khoản:</label>
											<input class="form-control" value="<?php echo $taikhoan['u_username']; ?>" type="text" name="tentaikhoan" placeholder="Nhập tên tài khoản..." required />
											<label>Mật khẩu:</label>
											<input class="form-control" value="<?php echo $taikhoan['u_password']; ?>" type="password" name="matkhau" placeholder="Nhập mật khẩu tài khoản..." required />
										</div>
										<div class="col-md-6">
											<label>Quyền:</label>
											<select name="quyen" class="form-control">
											<?php
												$sqlquyen="select * from quyen";
												$kqquyen=mysql_query($sqlquyen);
												while($dsquyen=mysql_fetch_array($kqquyen)){
											?>
											<option value="<?php echo $dsquyen['maquyen']; ?>" <?php if($dsquyen['maquyen']=$taikhoan['u_quyen']) echo 'selected'; ?>><?php echo $dsquyen['tenquyen']; ?></option>
											<?php
												}
											?>
											</select>
											<label>Nhập lại mật khẩu:</label>
											<input class="form-control" value="<?php echo $taikhoan['u_password']; ?>" type="password" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu tài khoản..." required />
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
                           Danh sách tài khoản
                        </div>
                        <div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Username</th>
								<th>Quyền</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=1;
								$sql = "select * from user left join quyen on user.u_quyen=quyen.maquyen;";
								$kq=mysql_query($sql);
								while($row=mysql_fetch_array($kq)){
							?>
							<tr>
								<td style="width:3%"><?php echo $i++; ?></td>
								<td><?php echo $row['u_username']; ?></td>
								<td><?php echo $row['u_quyen'];; ?></td>
								<td style="width:10%">
									<a href="?trang=taikhoan&action=modify&id=<?php echo $row['u_mauser']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=taikhoan&action=delete&id=<?php echo $row['u_mauser']; ?>"><i class="fa fa-trash"></i></a>
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
                           <strong>Thêm tài khoản</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoitaikhoan.php">
								<div class="row">
									<div class="col-md-6">
										<label>Tên tài khoản:</label>
										<input class="form-control" type="text" name="tentaikhoan" placeholder="Nhập tên tài khoản..." required />
										<label>Mật khẩu:</label>
										<input class="form-control" type="password" name="matkhau" placeholder="Nhập mật khẩu tài khoản..." required />
									</div>
									<div class="col-md-6">
										<label>Quyền:</label>
										<select name="quyen" class="form-control">
										<?php
											$sqlquyen="select * from quyen";
											$kqquyen=mysql_query($sqlquyen);
											while($dsquyen=mysql_fetch_array($kqquyen)){
										?>
										<option value="<?php echo $dsquyen['maquyen']; ?>"><?php echo $dsquyen['tenquyen']; ?></option>
										<?php
											}
										?>
										</select>
										<label>Nhập lại mật khẩu:</label>
										<input class="form-control" type="password" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu tài khoản..." required />
									</div>
								</div>
								</br>
								<input type="submit" value="Thêm tài khoản" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>