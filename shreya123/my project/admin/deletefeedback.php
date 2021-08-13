<?php

	$id=$_GET["User_id"];
	
	
	    	 $con=mysqli_connect("localhost","root","","hp");
			 $q="delete from feedback where User_id=".$id;
			 $p=mysqli_query($con,$q);
			 if($p)
			 {
				 ?>
				 <script>
					window.location="feedback.php";
				 </script>
				 <?php	
			 }
				else
				{
					?>
					<script>
						alert("error");
					</script>
					<?php					
				}		
				    ?> 