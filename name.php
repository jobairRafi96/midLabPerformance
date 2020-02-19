<!DOCTYPE html>
<html>
<head>
	<title>html+formsubmission</title>
</head>
<body>
	<form method="POST" action="register.php">
		<table border=".1" align="center" width="800px">
			<tr>
				<td colspan="3">
					<h1 align="center">PERSON PROFILE</h1>
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Name </h3>
				</td>
				<td align="center" colspan="2">
					<input type="text" name="uname" value="">
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Email </h3>
				</td>
				<td align="center" colspan="2">
					<input type="text" name="email" value="">
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Gender </h3>
				</td>
				<td align="center" colspan="2">
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others">Others
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> DOB: </h3>
				</td>
				<td align="center" colspan="2">
					<input type="text" name="day" size="3">/<input type="text"name="month"size="3">/<input type="text"name="year"size="3">
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Degree </h3>
				</td>
				<td align="center" colspan="2">
					<input type="checkbox" name="degree1" value="SSC">SSC
					<input type="checkbox" name="degree2" value="HSC">HSC
					<input type="checkbox" name="degree3" value="BSc">BSc
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Blood Group </h3>
				</td>
				<td align="center" colspan="2">
					<select name="bg">
					<option  value="A+">A+</option>
				    <option  value="B+">B+</option>
				    <option  value="O-">O-</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>
					<h3 align="center"> Profile Picture </h3>
				</td>
				<td align="center" colspan="2">
					<input type="file" name="pp" value="">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
						<tr>
							<td ></td>
						</tr>
					</table>
					
				</td>
			</tr>
			<tr>
				<td colspan="2">
					
				</td>
				<td align="right">
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>

		</table>


		<!-- Name 	: <br><input type="text" name="uname" value=""><br>
		email   : <br><input type="text" name="email" value=""><br>
		Gender  :<br><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others<br>
	<br>DOB: <input type="text" name="day" size="3">/<input type="text"name="month"size="3">/<input type="text"name="year"size="3"><br>
		Degree	:<br><input type="checkbox" name="degree1" value="SSC">SSC
				<input type="checkbox" name="degree2" value="HSC">HSC
				<input type="checkbox" name="degree3" value="BSc">BSc<br>
	Blood Group:<select name="bg">
					<option  value="A+">A+</option>
				    <option  value="B+">B+</option>
				    <option  value="O-">O-</option>
				</select><br>
	Profile Picture: <br><input type="file" name="pp" value="">


		<br><input type="submit" name="submit" value="submit"> -->
	</form>
</body>
</html>