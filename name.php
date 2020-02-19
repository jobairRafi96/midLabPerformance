<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="register.php">
		Name 	: <br><input type="text" name="uname" value=""><br>
		email   : <br><input type="text" name="email" value=""><br>
		Gender  :<br><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others<br>
	<br>DOB: <input type="text" name="day" size="3">/<input type="text"name="month"size="3">/<input type="text"name="year"size="3">

		<br><input type="submit" name="submit">
	</form>
</body>
</html>