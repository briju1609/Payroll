<?php include('insert.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<link rel="stylesheet" type="text/css" href="loginDesign.css">
</head>
<body style="background-image: url('../project/bg.jpg');">
	<h1 style="color: crimson;">Insert data to here to save in Database...</h1>

	<form method="post" action="insert.php">
		<table>
		<tr>
		<td><label>First Name:</label></td>
		<td><input type="text" placeholder="Enter First Name" name="firstname"></td>
		</tr>

		<tr>
		<td><label>Last Name:</label></td>
		<td><input type="text" placeholder="Enter Last Name" name="lastname"></td>
		</tr>

		<tr>
		<td><label>Gender:</label></td>
		<td><input type="text" placeholder="Gender" name="gender"></td>
		</tr>

		<tr>
		<td><label>Birthday:</label></td>
		<td><input type="text" placeholder="Date of Birth" name="birthday"></td>
		</tr>

		<tr>
		<td><label>Address:</label></td>
		<td><input type="text" placeholder="Enter your address" name="address"></td>
		</tr>

		<tr>
		<td><label>City:</label></td>
		<td><input type="text" placeholder="Your city" name="city"></td>
		</tr>

		<tr>
		<td><label>Province</label></td>
		<td><input type="text" placeholder="Your province" name="province"></td>
		</tr>

		
		<tr>
		<td><label>Email:</label></td>
		<td><input type="text" placeholder="Enter your email" name="email"></td>
		</tr>

		<tr>
		<td><label>Weblink:</label></td>
		<td><input type="text" placeholder="Any weblink if you have" name="weblink"></td>
		</tr>

		<tr>
		<td><label>Pay:</label></td>
		<td><input type="text" placeholder="Your pay" name="pay"></td>
		</tr>

		<tr></tr><tr></tr>
		<tr>
		<td></td>
		<td><input type="button" name="submit" value="Submit"></td>
		</tr>

		</table>
	</form>
 
</body>
</html>