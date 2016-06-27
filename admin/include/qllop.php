<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from lop where l_malop =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=lop';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from lop where l_malop ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$lop=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý lớp</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá lớp</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa lớp</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/sualop.php">
									<div class="row">
										<div class="col-md-6">
											<input style="display: none;" name="malop" value="<?php echo $_REQUEST['id']; ?>"
											<label>Tên lớp:</label>
											<input class="form-control" name="tenlop" value="<?php echo $lop['l_tenlop'] ?>" placeholder="Nhập tên lớp..." />
											<label>Phòng:</label>
											<input class="form-control" name="phong" value="<?php echo $lop['l_phong'] ?>" placeholder="Nhập phòng học..." />
										</div>
										<div class="col-md-6">
											<label>Mã giáo viên:</label>
											<select name="magiaovien" class="form-control">
											<?php
												$sqlcanbo="select cb_macanbo from canbo";
												$kqcanbo=mysql_query($sqlcanbo);
												while($dscanbo=mysql_fetch_array($kqcanbo)){
											?>
											<option value="<?php echo $dscanbo['cb_macanbo']; ?>" <?php if($dscanbo['cb_macanbo']==$lop['l_magiaovien']) echo 'selected'; ?>><?php echo $dscanbo['cb_macanbo']; ?></option>
											<?php
												}
											?>
											</select>
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
                           Danh sách lớp
                        </div>
                        <div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên lớp</th>
								<th>Phòng</th>
								<th>Tên giáo viên</th>
								<th>Hành động</th>
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
								<td style="width:10%">
									<a href="?trang=lop&action=modify&id=<?php echo $row['l_malop']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=lop&action=delete&id=<?php echo $row['l_malop']; ?>"><i class="fa fa-trash"></i></a>
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
                           <strong>Thêm lớp</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoilop.php">
								<div class="row">
									<div class="col-md-6">
										<label>Tên lớp:</label>
										<input class="form-control" name="tenlop" placeholder="Nhập tên lớp..." />
										<label>Phòng:</label>
										<input class="form-control" name="phong" placeholder="Nhập phòng học..." />
									</div>
									<div class="col-md-6">
										<label>Mã giáo viên:</label>
										<select name="magiaovien" class="form-control">
										<?php
											$sqlcanbo="select cb_macanbo from canbo";
											$kqcanbo=mysql_query($sqlcanbo);
											while($dscanbo=mysql_fetch_array($kqcanbo)){
										?>
										<option value="<?php echo $dscanbo['cb_macanbo']; ?>"><?php echo $dscanbo['cb_macanbo']; ?></option>
										<?php
											}
										?>
										</select>
									</div>
								</div>
								</br>
								<input type="submit" value="Thêm lớp" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>