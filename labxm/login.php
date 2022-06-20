<html>
<head>
	<title>Form Submission</title>
</head>
<body>
		<form action="loginCheck.php" method="post" enctype="">
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
						<td><input type="submit" name="login" value="Submit">
						<a href="reg.php"> Register </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>