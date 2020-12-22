<?php  
	
	// import config.
	include '../config/myConfig.php';

	
	class employee_m extends Connect
	{
	    
	    function __construct()
	    {
	        parent::__construct();
	    }

	    /*-------------add employee---------------*/
	    public function addEmployee($name, $phone, $email, $job)
	    {
	    	$sql = "INSERT INTO employee(name, phone, email, job) VALUES (:name, :phone, :email, :job)";

	    	$pre = $this->pdo->prepare($sql);
	    	$pre->bindParam(':name', $name, PDO::PARAM_STR);
	    	$pre->bindParam(':phone', $phone, PDO::PARAM_STR);
	    	$pre->bindParam(':email', $email, PDO::PARAM_STR);
	    	$pre->bindParam(':job', $job, PDO::PARAM_STR);

	    	return $pre->execute();
	    }

	    /*-------------update employee---------------*/
	    public function updateEmployee($id, $name, $phone, $email, $job)
	    {
	    	$sql = "UPDATE employee SET name = :name, email = :email, phone = :phone, job = :job WHERE id = :id";

	    	$pre = $this->pdo->prepare($sql);
	    	$pre->bindParam(':id', $id, PDO::PARAM_INT);
	    	$pre->bindParam(':name', $name, PDO::PARAM_STR);
	    	$pre->bindParam(':email', $email, PDO::PARAM_STR);
	    	$pre->bindParam(':phone', $phone, PDO::PARAM_STR);
	    	$pre->bindParam(':job', $job, PDO::PARAM_STR);
	    	return $pre->execute();
	    }


	    /*-------------get Employee---------------*/
	    public function getEmployeeById($id)
	    {
	    	$sql = "
		    	SELECT 
					*
				FROM 
					employee
				WHERE 
					id = :id";

	    	$pre = $this->pdo->prepare($sql);
	    	$pre->bindParam(':id', $id, PDO::PARAM_INT);

	    	$pre->execute();
	    	return $pre->fetchAll(PDO::FETCH_ASSOC);
	    }

	    /*-------------delete employee---------------*/
	    public function deleteEmployee($id)
	    {
	    	$sql = "DELETE FROM employee WHERE id = :id";

	    	$pre = $this->pdo->prepare($sql);
	    	$pre->bindParam(':id', $id, PDO::PARAM_INT);
	    	return $pre->execute();
	    }
	}
?>