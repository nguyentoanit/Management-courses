<?php
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from monhoc where mh_mamonhoc =".$_REQUEST['id'];
			mysql_query($delete);
			echo "<script>location.href='index.php?trang=monhoc';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from monhoc where mh_mamonhoc ='.$_REQUEST['id'];
			$result=mysql_query($modify);
			$monhoc=mysql_fetch_array($result);
			break;
	}
}
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý môn học</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá môn học</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa môn học</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suamonhoc.php">
									<input type="text" name="mamonhoc" class="form-control" value="<?php echo $monhoc['mh_mamonhoc']; ?>" style="display:none" />
									<label>Tên môn học:</label>
									<input type="text" name="tenmonhoc" class="form-control" placeholder="Nhập tên môn học mới..." value="<?php echo $monhoc['mh_tenmonhoc']; ?>" required />
									<label>Mã giáo viên:</label>
									<select name="canbo" class="form-control">
										<?php
											$canbo="select cb_macanbo from canbo";
											$kq=mysql_query($canbo);
											while($row=mysql_fetch_array($kq)){
										?>
										<option value="<?php echo $row['cb_macanbo']; ?>" <?php if($row['cb_macanbo']==$monhoc['mh_mamonhoc']) echo 'selected'; ?> ><?php echo $row['cb_macanbo']; ?></option>
										<?php
											}
										?>
									</select>
									</br>
									<input type="submit" value="Cập nhật" class="btn btn-success" />
								</form>
							</div>
						</div>
					</div>
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Danh sách môn học
                        </div>
                        <div class="panel-body ">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Mã môn học</th>
								<th>Tên giáo viên</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=1;
								$sql = "select * from monhoc as mh join canbo as cb on mh.mh_magiaovien=cb.cb_macanbo;";
								$kq=mysql_query($sql);
								while($row=mysql_fetch_array($kq)){
							?>
							<tr>
								<td style="width:3%"><?php echo $i++; ?></td>
								<td><?php echo $row['mh_mamonhoc']."-".$row['mh_tenmonhoc']; ?></td>
								<td><?php echo $row['cb_hoten']; ?></td>
								<td style="width:10%">
									<a href="?trang=monhoc&action=modify&id=<?php echo $row['mh_mamonhoc']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=monhoc&action=delete&id=<?php echo $row['mh_mamonhoc']; ?>"><i class="fa fa-trash"></i></a>
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
                           <strong>Thêm môn học</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoimonhoc.php">
								<label>Tên môn học:</label>
								<input type="text" name="tenmonhoc" class="form-control" placeholder="Nhập tên môn học..." required />
								<label>Chọn giáo viên:</label>
								<select name="canbo" class="form-control">
								<?php
									$canbo="select cb_macanbo from canbo";
									$kq=mysql_query($canbo);
									while($row=mysql_fetch_array($kq)){
								?>
								<option value="<?php echo $row['cb_macanbo']; ?>"><?php echo $row['cb_macanbo']; ?></option>
								<?php
										
									}
								?>
								</select>
								</br>
								<input type="submit" value="Thêm môn học" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>
            </div>
    </div>