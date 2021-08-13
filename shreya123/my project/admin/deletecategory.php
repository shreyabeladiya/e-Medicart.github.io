<?php
	$id=$_GET["Category_id"];
	$im=$_GET["img"];
	
	
	    	 $con=mysqli_connect("localhost","root","","hp");
		     include("hpconn.php");	
     		 unlink("upload/".$img);
			 
			 $q="delete from category where Category_id='$id'";
			 $p=mysqli_query($con,$q);
			 if($p)
			 {
				 ?>
				 <script>
					window.location="category.php";
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