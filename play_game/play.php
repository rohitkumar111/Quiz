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
<?php

	
		$x=0;
		function quiztest($y)
	 	{
			include('../dbcon.php');
		 	$qry="SELECT * FROM `today_` where `id`='$y'";
		 	$run=mysqli_query($con,$qry);
			$data= mysqli_fetch_assoc($run);
			
			echo "Q".$y." ". $data['que']."<br>";
?>
		<form action="play.php" method="post">
			<input required="" type="radio" name="y"="on" required=""/><?php echo $data['ans1']."<br>";?>
			<input required="" type="radio" name="y"="on" required=""/><?php echo $data['ans2']."<br>";?>
			<input required="" type="radio" name="y"="on" required=""/><?php echo $data['ans3']."<br>";?>
			<input required="" type="radio" name="y"="on" required=""/><?php echo $data['ans4']."<br>";?>
	
			<input type="submit" value="submit" name="submit"/><br>
	   </form>		
<?php		}
			
			while($x<=3)
			{	
				$x++;
				if(isset($_POST['submit']) || $x==1)
				{ 

					quiztest($x);
					
				} 
			}
				
				
?>