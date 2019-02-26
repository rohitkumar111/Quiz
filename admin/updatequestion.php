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
<h1 align="center">Welcome To updation Block</h1>

<?php
	
	include('../dbcon.php');
	
	$sid = $_GET['sid'];
	$sql = "SELECT * FROM `today_` WHERE `id`='$sid'";
	$run = mysqli_query($con,$sql);
	$data= mysqli_fetch_assoc($run);
	
?>

<form action="updatedata.php" method="post">
	<table align="center" border="1">
		<tr>
			<td>question:-</td><td><input type="text" name="que" size="100" value="<?php echo $data['que'] ?>"/></td>
		</tr>
		<tr>
			<td>true ans</td><td><input type="text" name="ans1" value="<?php echo $data['ans1'] ?>" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans2" value="<?php echo $data['ans2'] ?>" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans3" value="<?php echo $data['ans3'] ?>" size="100"/></td>
		</tr>
		<tr>
			<td>wrong ans</td><td><input type="text" name="ans4" value="<?php echo $data['ans4'] ?>" size="100"/></td>
		</tr>
		<tr>
			
			<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
			<input type="submit" value="Update" name="submit"/></td>
		</tr>
	</table>
</form>


</body>
</html>