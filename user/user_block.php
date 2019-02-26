<?php
session_start();
			if(isset($_SESSION['userid']))
			{
				echo "";
			}
			else
			{
				header('location:../index.php');
			}
?>
<html>
<head>
	<title></title>
</head>
<body>

<center><a href="../play_game/play.php">play</a> </center>
<h4><a href="userlogout.php" style="float: right; margin-right: 30px; color: black; font-size: 20px;">Logout</a></h4>

</body>
</html>
