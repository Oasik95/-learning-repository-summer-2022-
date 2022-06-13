<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Submission</title>
</head>
<body>
		<form action="home.php" method="post" enctype="">
			<fieldset>
				<legend>Sign In</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
<?php } else{

	echo "invalid request";
} ?>