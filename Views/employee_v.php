<!-- head -->
<div class="head-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-left">
				<h3>Bảng nhân viên</h3>
			</div>
		</div>
	</div>
</div>

<!-- content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 text-left">
			<div class="content-box">
				<h4>Danh sách nhân viên</h4>
				<div class="text-center">
					<button data-toggle="modal" data-target="#myModal" class="btn-add btn btn-primary"><i class="fas fa-plus mr-2"></i>Thêm danh sách nhân viên</button>
				</div>
				<!-- content -->
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ tên</th>
							<th>Số điện thoại</th>
							<th>Email</th>
							<th>Công việc</th>
							<th>Chức vụ</th>
							<th>Hành động</th>
						</tr>
					</thead>
					<tbody>
						<!-- php -->
						<?php 
							$stt = 0; 
							foreach ($employeeData as $key => $employee) { $stt += 1; ?>
								<tr>
									<td><?php echo $stt; ?></td>
									<td><?php echo $employee['name']; ?></td>
									<td><?php echo $employee['phone']; ?></td>
									<td><?php echo $employee['email']; ?></td>
									<td><?php echo $employee['job']; ?></td>
									<td>
										<?php  
											$role = $employee['role'];
											switch ($role) {
												case 1:
													echo 'Quản trị viên';
													break;

												case 2:
													echo 'Cộng tác viên';
													break;

												case 3:
													echo 'Nhân viên';
													break;
												
												default:
													echo 'Khóa tài khoản';
											}
										?>
									<td>
										<a getId="<?php echo $employee["id"] ?>" data-toggle="modal" data-target="#myModal-update" class="btn btn-warning btn-update-employee">
											<i class="fas fa-pencil-alt mr-2"></i>Sửa
										</a> &nbsp; 
										<a getId="<?php echo $employee["id"] ?>" class="btn btn-danger btn-delete">
											<i class="far fa-trash-alt mr-2"></i>Xóa
										</a>
									</td>
								</tr>
						<?php								
							}
						?>
						<!-- ./php -->
						
					</table>
				</div>
			</div>
		</div>
</div>
<?php include_once 'Views/add_employee_v.php'; ?>
<?php include_once 'Views/update_employee_v.php'; ?>