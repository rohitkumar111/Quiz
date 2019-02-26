<?php
session_start();
			if(isset($_SESSION['auid']))
			{
				echo "";
			}
			else
			{
				header('location:../login.php');
			}
?>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>admindash</title>
</head>	
<body bgcolor="#2fe1cb">
<h4><a href="../logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 20px;">Logout</a></h4>
<h1 align="center">Welcome To Admindash</h1>
<ul type="sphere">
	<h3 align="left"><li><a href="insertq.php">Insert Question And Answer</a></li></h3>
	<h3 align="left"><li><a href="updateq.php">Update Question And Answer</a></li></h3>
	<h3 align="left"><li><a href="deleteq.php">Delete Question And Answer</a></li></h3>
</ul>

</body>
</html>