<?php
	function register()
	{
		if(isset($_POST['submit']))
		{
			include('../dbcon.php');
			$username=$_POST['username'];
			$password=$_POST['password'];
			$yname=$_POST['yname'];
			$mobile_no=$_POST['mobile_no'];
			$email_id=$_POST['email_id'];
			
			$qry="INSERT INTO `userdetail`(`username`, `password`, `yname`, `mobile_name`, `email_id`) VALUES ('$username','$password','$yname','$mobile_no','$email_id')";
			$run=mysqli_query($con,$qry);
			if($run==TRUE)
			{
				?>
				<script>
					alert('Congratulation you are register');
				</script>
				<?php
			}
			else
			{
				?>
				<script>
					alert('something is wrong!!');
				</script>
				<?php
			}
			
		}
	}
?>