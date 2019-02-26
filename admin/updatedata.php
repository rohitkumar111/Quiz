<?php

	include('../dbcon.php');
	
	$que=$_POST['que'];
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	
	$sid=$_POST['sid'];

	$qry="UPDATE `today_` SET `que`='$que',`ans1`='$ans1',`ans2`='$ans2',`ans3`='$ans3',`ans4`='$ans4' WHERE `id`='$sid'";	
	 $run=mysqli_query($con,$qry);
		if($run==TRUE)
		{
			?>
			
			<script>
				alert('Data Updated Successfully.');
				window.open('updateq.php','_self');
			</script>
		<?php
			
		}

?>