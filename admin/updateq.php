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

<table align="center">
	<form method="post" action="updateq.php">
		<tr>
			<th>Enter The Question no</th><td><input type="number" placeholder="enter the no." name="number"/></td>
		
			<td colspan="1"><input type="submit" value="search" name="submit"/></td>
		</tr>
	</form>
</table>

<table  border="1" style="margin-top: 20px; margin-left: 30%;">
	
	<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$number = $_POST['number'];
		
		$sql="SELECT * FROM `today_` WHERE `id`='$number'"; 
	    $run = mysqli_query($con,$sql);
	    
	    if(mysqli_num_rows($run)<1)
	    {
			echo "<tr><td>No Records Founds</td></tr>";
		}
		else
		{
			$count=0;
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr align="center">
					<td><?php echo "Q-".$number; ?></td>
					<td><?php echo $data['que']; ?></td>
					<tr>
			    		<td>ans.1</td><td><?php echo $data['ans1']; ?></td>
			    	</tr>
			    	<tr>
			    		<td>ans.2</td><td><?php echo $data['ans2']; ?></td>
			    	</tr>
			    	<tr>
			    		<td>ans.3</td><td><?php echo $data['ans3']; ?></td>	
			    	</tr>
			    	<tr>
			    		<td>ans.4</td><td><?php echo $data['ans4'];?></td>
			   	   </tr>
			   	   <tr>
			   	   		<td colspan="2" align="center"><a href="updatequestion.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
			   	   </tr>
			    <?php
			}
		}
	}
		?>

</body>
</html>