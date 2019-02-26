<?php
	if(isset($_POST['login']))
	{
		session_start();
			if(isset($_SESSION['userid']))
			{ ?>
					<script>
				alert('you have already login !!');
				window.open('index.php','_self');
			</script><?php
			}	
			else
			{
			
			}
	}
/*session_start();
			if(isset($_SESSION['userid']))
			{
				echo "";
			}
			else
			{
				header('location:../index.php');
			}*/
?>
<?php
function loginpage()
{
include('dbcon.php');
	if(isset($_POST['login']))
	{
		/*session_start();
			if(isset($_SESSION['userid']))
			{ ?>
					<script>
				alert('you have already login !!');
				window.open('index.php','_self');
			</script><?php
			}
			else
			{
			
			}*/
		
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `userdetail` WHERE `username`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script>
				alert('Username or password not match !!');
				window.open('index.php','_self');
			</script>
		<?php
		}
		else
		{	$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			
			
			$_SESSION['userid']=$id;
			header('location:user/user_block.php');
		}
	}	

}
?>