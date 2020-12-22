<?php  
	
	include_once 'Config/myConfig.php';


	class dashboard_m extends Connect
	{

	    function __construct()
	    {
	        parent::__construct();
	    }

	    public function getEmployee()
	    {
	    	// $sql = "SELECT "
	    }

	    // Register
	    // public function register($name, $user, $password, $job)
	    // {
	    // 	$sql = "INSERT INTO tbl_users (name, user, password, job) VALUES (:name, :user, :password, :job)";

	    // 	$pre = $this->pdo->prepare($sql);
	    // 	$pre->bindParam(':name', $name);
	    // 	$pre->bindParam(':user', $user);
	    // 	$pre->bindParam(':password', $password);
	    // 	$pre->bindParam(':job', $job);

	    // 	return $pre->execute();
	    // }

	}
	
?>