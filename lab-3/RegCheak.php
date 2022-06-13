<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username = $_REQUEST['username'];
		//$Email = $_REQUEST['Email'];
		//$DoB = $_REQUEST['DoB'];
		//$Gender = $_REQUEST['Gender'];
		$password = $_REQUEST['password'];	
	}

	if ($username == 'FAHIM' || $password == 'FAHIM' ) {
		echo "LOGIN SUCCESs <br>";
	}
		if($username == $password){
			$_SESSION['status'] = true;
			header('location: login.php');
		}else{
			echo "invalid user";
		
	}
?>