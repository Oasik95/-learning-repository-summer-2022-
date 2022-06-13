<html>
<head>
	<title>Form Submission</title>
</head>
<body>
		<form action="RegCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Sign Up</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
					<td>Email: </td>
					<td> <input type="email" name="" value="" /></td>
				</tr>
				<tr>
					<td>DoB: </td>
					<td> <input type="date" name="" value="" /></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td> 
						 <input type="radio" name="gender" value=""/> Male
						 <input type="radio" name="gender" value=""/> Female
						 <input type="radio" name="gender" value=""/> Other
					</td>
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