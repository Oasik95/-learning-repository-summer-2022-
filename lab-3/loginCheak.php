
<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];	
	}

	if ($username == null || $password == null ) {
		echo "invalid username/password <br>";
	}
	else{
		$_SESSION['uname']=$username;
		$_SESSION['pass']=$password;
		header('location: login.php');
	 }	
	}
?>