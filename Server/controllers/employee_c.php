<?php  

	// import model.
	include_once '../models/employee_m.php';

	
	class employee_c extends employee_m
	{

	    private $employee;

	    function __construct()
	    {
	        $this->employee = new employee_m();
	    }


	    /*-------------add Employee---------------*/
	    public function addEmployee($name, $phone, $email, $job)
	    {
	    	return $this->employee->addEmployee($name, $phone, $email, $job);
	    }

	    /*-------------update Employee---------------*/
	    public function updateEmployee($id, $name, $phone, $email, $job)
	    {
	    	return $this->employee->updateEmployee($id, $name, $phone, $email, $job);
	    }

	    /*-------------delete Employee---------------*/
	    public function deleteEmployee($id)
	    {
	    	return $this->employee->deleteEmployee($id);
	    } 

	    /*-------------getEmployeeById---------------*/
	    public function getEmployeeById($id)
	    {
	    	return $this->employee->getEmployeeById($id);
	    }
	}
?>