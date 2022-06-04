<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		
		if (empty($fname) or empty($lname) ){
			echo "please fill up the form properly";}

			
		
	
	
	
	
			 else{

		echo "submit successfully";
	}
		}
	

	





	
	
?>
