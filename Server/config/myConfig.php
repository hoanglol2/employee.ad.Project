<?php  
	
	class Connect 
	{
	    
	    private $dns = 'mysql:host=localhost;dbname=employee';
	    private $user = 'root';
	    private $passw = '';
	    protected $pdo = null;

	    function __construct()
	    {
	        try {
	        	
	        	$this->pdo = new PDO($this->dns,$this->user,$this->passw);
	        	$this->pdo->query('SET NAMES utf8');

	        } catch (PDOException $e) {

	        	echo $e->getMessage();
	        	exit();
	        }
	    }
	}
?>