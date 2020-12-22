<?php  
	
	include_once 'Config/myConfig.php';


	class employee_m extends Connect
	{

	    function __construct()
	    {
	        parent::__construct();
	    }

	    public function getEmployee()
	    {
	    	$sql = "SELECT * FROM employee";
	    	$pre = $this->pdo->prepare($sql);	    
	    	$pre->execute();
	    	return $pre->fetchAll(PDO::FETCH_ASSOC);
	    }

	}
	
?>