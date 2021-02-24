<!DOCTYPE html>
<html>
<head>
<style>
	
	input
	{
		padding:10px;
		margin:20px;
	}
	form
	{
         border:1px dashed grey;
		margin-left:400px;
		width:550px;
          text-align:center;
          font-size:20px;
      }
	
	h1
	{
		text-align: center;
	}
</style>
<title>registration page
</title>
</head>
<body>
<h1>REGISTRATION FORM</h1>
<form method="post" action="<?php echo base_url()?>main/regi">
	<table>
		<tr><td>
First Name:</td><td>
<input type="text" name="firstname" required maxlength="25" pattern="[a-zA-Z]+"><br></td></tr>
<tr><td>Last Name::</td>
<td><input type="text" name="lastname" required maxlength="25" pattern="[a-zA-Z]+"><br></td></tr>
<tr><td>Username:</td>
<td><input type="text" name="username" required maxlength="10" pattern="[a-zA-Z0-9]+"><br></td></tr>
<tr><td>Password:
<td><input type="password" name="password" required pattern="pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br></td></tr>
<tr><td>Moblie:</td>
<td><input type="text" name="mobile" required pattern="[7-9]{1}[0-9]{9}"><br></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" required><br></td></tr>
</table>
<input type="submit" value="Register" align="center" name="register">
</form>
</body>
</html>



