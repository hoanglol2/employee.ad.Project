<?php  
	
	include_once 'Models/employee_m.php';


	class employee_c extends employee_m
	{

		private $employee;

	    function __construct()
	    {
	       	$this->employee = new employee_m();
	    }

	    public function showEmployee()
	    {
	    	$employeeData = $this->employee->getEmployee();
	    	include_once 'Views/employee_v.php';	
	    }

	    
	}
	
?>