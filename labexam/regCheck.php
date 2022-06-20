<?php 

	$id = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$confirm_password = $_REQUEST['confirm_password'];
	$name = $_REQUEST['name'];
	
	
	if(isset($_REQUEST['user'])){
		$usertype = $_REQUEST['user'];
	}

	if ($id == null || $password == null || $confirm_password == null || $name == null || $usertype == null) {
		echo "invalid username/password/email <br>";
	}else{
	$data = $id."|".$password."|".$confirm_password."|".$name."|".$usertype."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	}



?>