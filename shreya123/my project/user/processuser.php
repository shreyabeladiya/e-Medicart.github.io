<?php
session_start();

	$con=mysqli_connect("localhost","root","","hp");
		
	$un=$_POST['untxt'];
	$pw=$_POST['pwtxt'];
	
	$a="select * from registration where User_name='$un' AND password='$pw'";
	$c=mysqli_query($con,$a);
	$r=mysqli_num_rows($c);
	
	if($r>=1)
	{
		$_SESSION['admin']=$un;
		?>
		<script>
		    window.location="index.php";
		</script>
        
		<?php
	}	
	else
	{
		?>
		 <script>
		    alert('Invalid Username Password');
			window.location="index.php";
		 </script>
		<?php
		
	}	
?>	