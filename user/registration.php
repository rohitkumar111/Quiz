<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Todayquiz</title></title>
</head>	
<body>

<h1 align="center">Welcome To Registration Block</h1>
<hr/>

<form method="post" action="registration.php">
	<table align="center" bgcolor="#b0ca6f" border="1" width="30%">
		<tr><th align="left" colspan="2">Login Detail...</th></tr>
		<tr><td colspan="2">please fill username & password properly.<br>Please in your password add atleast one spacial case,upper case,numeric digit </td></tr>
		<tr>
			<td>Username</td><td><input type="text" placeholder="enter username" name="username"  required="" /></td>
		</tr>
		<tr>
			<td>password</td><td><input type="password" placeholder="enter password" name="password" required="" /></td>
		</tr>
		<tr><th align="left" bgcolor="#b0ca6f" colspan="2">Your personal detail...</th></tr>
		<tr>
			<td>name</td><td><input type="text" name="yname" placeholder="enter your name" required="" /></td>
		</tr>
		<tr>
			<td>mobile_no.</td><td><input type="tel" name="mobile_no" placeholder="enter mobile no." required=""/></td>
		</tr>
		<tr>
			<td>Emial_id</td><td><input type="email" name="email_id" placeholder="enter email_id" required="" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="submit"/></td>
		</tr>
	</table>
</form>

<?php

include('user_register.php');
register();

?>

</body>
</html>