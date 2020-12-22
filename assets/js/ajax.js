$(document).ready(function() {
	"use strict";

	/*------------Add employee----------------*/
	$('.frm-add-employee').on('submit', function(e){
		e.preventDefault();

		let name = $('#name').val();
		let phone = $('#phone').val();
		let email = $('#email').val();
		let job = $('#job').val();
		let action = 'add-employee';
		
		$.post('Server/employees/action.php', {action: action, name: name, phone: phone, email: email, job: job}, function(data) {
			
			data = parseInt(data);
			if (data === 1) {
				alert('Thêm thành công');	
				window.location = 'index.php?page=employee';
			}
		});
	});

	/*-------------Select employee--------------*/
	$(document).on('click', '.btn-update-employee', function(e) {
		var id 		= $(this).attr('getId');
		var action  = 'get-employee';

		$.ajax({
			url: 'Server/employees/action.php',
			type: 'POST',
			dataType: 'json',
			data: {action: action, id: id},
		})
		.done(function(data) {
			let name='';
			let phone='';
			let email='';
			let job='';
			let getId='';
			$.each(data, function(index, employee) {
				name += `<input type="text" class="form-control" value="${employee['name']}" id="getName" placeholder="Họ tên*" required>`;
				phone += `<input type="number" class="form-control" id="getPhone" value="${employee['phone']}" placeholder="Số điện thoại*" required>`;
				email += `<input type="text" class="form-control" id="getEmail" value="${employee['email']}" placeholder="Email*" required>`;
				job += `
				<select id="getJob" class="form-control" required>
	              <option value="">--Chọn công việc--</option>
	              <option value="Lập trình viên">Lập trình viên</option>
	              <option value="Marketing">Marketing</option>
	              <option value="Tester">Tester</option>
	              <option value="Trợ lý giám đốc">Trợ lý giám đốc</option>
	              <option value="BA">BA</option>
	            </select>`
	            getId += `<input type="text" class="form-control" id="getId" value="${employee['id']}" placeholder="Email*" hidden>`;
			});

			// dữ liệu trả về.
			$('#selector-name').html(name);
			$('#selector-phone').html(phone);
			$('#selector-email').html(email);
			$('#selector-job').html(job);
			$('#selector-getId').html(getId);
		})
	});


	/*------------Delete employee---------------*/
	$(document).on('click', '.btn-delete', function(e) {
		e.preventDefault();
		var id 		= $(this).attr('getId');
		var action  = 'delete-employee';

		let checked = confirm('Bạn thực sự muốn loại bỏ nhân viên này?');
		if (checked) {
			$.post('Server/employees/action.php', {action: action, id: id}, function(data) {
				data = parseInt(data);
				if (data === 1) {
					alert('Loại bỏ thành công');
					window.location = 'index.php?page=employee';	
				}
			});
		}
	});

	/*------------Update user--------------*/
	$(document).on('submit', '.frm-update-employee', function(e) {
		e.preventDefault();
		let action = 'update-employee';
		let name = $('#getName').val();
		let phone = $('#getPhone').val();
		let email = $('#getEmail').val();
		let job = $('#getJob').val();
		let id = $('#getId').val();

		$.post('Server/employees/action.php', {id: id, action: action, name: name, phone: phone, email: email, job: job}, function(data) {
			data = parseInt(data);
			if (data === 1) {
				alert('Cập nhật thành công');
				window.location = 'index.php?page=employee';	
			}
		});
	});


});