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
			<th bgcolor="000000"><h3>User_name</h3></th>
			<th bgcolor="000000"><h3>Delivary address</h3></th>
			<th bgcolor="000000"><h3>Date</h3></th>
			<th bgcolor="000000"><h3>Action</h3></th>
			</tr>
			</center>
		
			
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$n1="select * from order_master";
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
			?>
		         <tr>
				  <td align=center><?php echo $r['O_id'];?></td>    
				  <td align=center><?php echo $r['User_name'];?></td>
				  <td align=center><?php echo $r['Delivaryaddress'];?></td>
				  <td align=center><?php echo $r['Date'];?></td>
				  <td> 
				    <a  onclick="return confirm('Are you sure to delete this record?')" href="deleteorder.php?O_id=<?php echo $r['O_id']?>"> <span class="glyphicon glyphicon-trash"></span>  </a>&nbsp; &nbsp; 
					<a href="detail.php?O_id=<?php echo $r['O_id']?>"><span class="glyphicon glyphicon-plus-sign"></span></a>
					</td>
				</tr>				  
				

	
			<?php 
			}
	?>
</table>
</td>
<?php
include "footer.php";
?>