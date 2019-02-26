<?php
session_start();
			if(isset($_SESSION['auid']))
			{
				header('location:admin/admindash.php');
			}
?>

<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>login</title>
</head>	
<body>

<h1 align="center">ADMIN LOGIN</h1>

<form method="post" action="login.php">
	<table align="center">
		<tr>
			<td>Username</td><td><input type="text" name="auname"/></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="apass"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Login" name="alogin"/></td>
		</tr>
	</table>
</form>


</body>
</html>
<?php
include('dbcon.php');
	if(isset($_POST['alogin']))
	{
		$username=$_POST['auname'];
		$password=$_POST['apass'];
		
		$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script>
				alert('Username or password not match !!');
				window.open('login.php','_self');
			</script>
		<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			
			
			$_SESSION['auid']=$id;
			header('location:admin/admindash.php');
		}
	}	
?>