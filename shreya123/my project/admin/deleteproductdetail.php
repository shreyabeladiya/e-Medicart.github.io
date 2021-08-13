<?php
	$id=$_GET["P_id"];
	$im=$_GET["img"];
	
	
	    	 $con=mysqli_connect("localhost","root","","hp");
		     include("hpconn.php");	
     		 unlink("upload/".$im);
			 
			 $q="delete from productdetail where P_id=".$id;
			 $p=mysqli_query($con,$q);
			 if($p)
			 {
				 ?>
				 <script>
					window.location="productdetail.php";
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