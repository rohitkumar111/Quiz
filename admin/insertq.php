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
<h1 align="center">Welcome To Insertion Block</h1>

<form action="insertq.php" method="post">
	<table align="center" border="1">
		<tr>
			<td>question:-</td><td><input type="text" name="que" size="100"/></td>
		</tr>
		<tr>
			<td>true ans</td><td><input type="text" name="ans1" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans2" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans3" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans4" size="100"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="submit"/></td>
		</tr>
	</table>
</form>

<?php

if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$que=$_POST['que'];
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	
	$qry="INSERT INTO `today_`(`que`, `ans1`, `ans2`, `ans3`, `ans4`) VALUES ('$que','$ans1','$ans2','$ans3','$ans4')";
	
	$run=mysqli_query($con,$qry);
	if($run==TRUE)
	{
		?>
		<script>
			alert('Data Inserted Successfully.');
		</script>
		<?php
	}
}

?>

</body>
</html>