<?php 
	session_start();

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($username == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		
					
				
				if($username == "admin" && $password == "admin123")
				{
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/adminHome.php');

				}
				elseif($username == "employee" && $password == "employee123")
				{
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/employeeHome.php');

				}
				
		
		echo "invalid user!";
	}



?>