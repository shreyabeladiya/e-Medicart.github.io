<?php
	$id=$_GET["C_id"];
	
	
	    	 $con=mysqli_connect("localhost","root","","hp");
			 $q="delete from registration where C_id='$id'";
			 $p=mysqli_query($con,$q);
			 if($p)
			 {
				 ?>
				 <script>
					window.location="registration.php";
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