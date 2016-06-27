<div id="wrapper">
	<!-- /. NAV SIDE  -->
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">Trang quản lý quyền</h1>
				</div>
			</div>
			<!-- /. ROW  -->
			<div class="row">
				<div class="col-md-12">
				   <div class="panel panel-default">
					<div class="panel-heading">
					   Danh sách quyền
					</div>
					<div class="panel-body">
					<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Mã quyền</th>
							<th>Quyền</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i=1;
							$sql = "select * from quyen;";
							$kq=mysql_query($sql);
							while($row=mysql_fetch_array($kq)){
						?>
						<tr>
							<td style="width:3%"><?php echo $i++; ?></td>
							<td><?php echo $row['maquyen']; ?></td>
							<td><?php echo $row['tenquyen'];; ?></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				</div>
			   </div>
			</div>
			</div>
		</div>
</div>