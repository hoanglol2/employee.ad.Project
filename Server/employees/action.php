<?php  

	include_once '../controllers/employee_c.php';
	$employee = new employee_c();
	

	// add employee
	if (isset($_POST['action']) && $_POST['action'] == 'add-employee') {
		
		$name 		= $_POST['name'];
		$phone 		= $_POST['phone'];
		$email 		= $_POST['email'];
		$job 		= $_POST['job'];
	

		$add = $employee->addEmployee($name, $phone, $email, $job);
		if ($add) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/*-------------select employee----------------*/
	if (isset($_POST['action']) && $_POST['action'] == 'get-employee') {

		$id = $_POST['id'];
		// select.
		$getEmployeeById = $employee->getEmployeeById($id);
		echo json_encode($getEmployeeById);
	}

	// delete employee.
	if (isset($_POST['action']) && $_POST['action'] == 'delete-employee') {
		$id = $_POST['id'];

		$delete = $employee->deleteEmployee($id);
		if ($delete) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/*-------------update employee----------------*/
	if (isset($_POST['action']) && $_POST['action'] == 'update-employee') {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$job = $_POST['job'];
		$id = $_POST['id'];


		$update = $employee->updateEmployee($id, $name, $phone, $email, $job);
		if ($update) {
			echo 1;
		} else {
			echo 0;
		}
	}

?>