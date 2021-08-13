<?php
include "header.php";

include "link.php";

?>
<style>
	h3{color:white;}
	th,td 
	{
		padding:10px;
	}
	.box
	{
		border:2px solid black;

		border-radius:30px;
		color:red;
		height:10px;
		width:100px;
		padding-left:20px;
		padding-right:20px;
		

	}
	</style>
		<td align="center" colspan=2>
			<table border=1 width=800>   
			<tr>
			<th bgcolor="000000"><h3>Order_id</h3></th>
			<th bgcolor="000000"><h3>Product_Name</h3></th>
			<th bgcolor="000000"><h3>Quantity</h3></th>
			<th bgcolor="000000"><h3>Price</h3></th>
			<th bgcolor="000000"><h3>Total</h3></th>
			</tr>
			</center>
		
			
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
			 $oid=$_REQUEST['O_id'];
			
			$n1="select * from item_master where o_id=".$oid;
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
			?>
		         <tr>
				  <td align="center"><?php echo $r['o_id'];?></td>    
				  <td align="center"><?php echo $r['Product_name'];?></td>
				  <td align="center"><?php echo $r['Quantity'];?></td>
				  <td align="center"><?php echo $r['price'];?></td>
				  <td align="center"><?php echo $r['total'];?></td>
				  
				</tr>				  
				

	
			<?php 
			}
	?>
</table>
</td>
<?php
include "footer.php";
?>