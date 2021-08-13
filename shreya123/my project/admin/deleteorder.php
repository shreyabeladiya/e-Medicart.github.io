<?php
	$ab = $_GET['O_id'];
	
	
	    	 $con=mysqli_connect("localhost","root","","hp");
			 $q="delete from order_master where O_id=".$ab;
			 $p=mysqli_query($con,$q);
			 if($p)
			 {
				 ?>
				 <script>
					window.location="order.php";
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