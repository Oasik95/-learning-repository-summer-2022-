<?php 
	
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome Anne !</h1>
		<a href="profile.php"> Profile </a> <br> 
		<a href="Change_Password.php"> Change Password </a> <br>
		<a href="logout.php"> Logout </a> <br>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>