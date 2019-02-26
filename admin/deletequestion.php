<?php
		include('../dbcon.php');
		
		$id=$_REQUEST['sid'];
		
		$qry ="DELETE FROM `today_` WHERE `id`='$id';";
		
	    $run=mysqli_query($con,$qry);
		if($run == true)
		{
			?>
			<script>
				alert('Data Deleted Successfully.');
				window.open('deleteq.php','_self');
				
				
			</script>
		<?php
		}

?>