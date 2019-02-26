
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>index</title>
</head>	
<body>

<h3 align="right" ><a href="login.php">admin login</a></h3>
<h2><a href="user\registration.php"><input type="submit" value="Register" name="reg" /></a></h2><h1 align="center">TODAY QUIZ</h1>

<form method="post" action="index.php">
	<table border="0" bgcolor="#c9fcf3">
		<tr>
			<td>Username</td><td><input type="text" name="uname" required=""/></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="pass" required=""/></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Login" name="login"/></td>
		</tr>
	</table>
</form>	
</body>
</html>
<?php

include('user/userlogin.php');
loginpage();

?>