<?php  
	
	include_once 'Models/dashboard_m.php';


	class dashboard_c extends dashboard_m
	{

		private $dashboard;

	    function __construct()
	    {
	       	$this->dashboard = new dashboard_m();
	    }

	    public function dashboard()
	    {
	    	include_once 'Views/dash-board.php';	
	    }

	    
	}
	
?>