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
		
			<table border=1 width=800 height=50>   
			<tr>
			<th bgcolor="000000"><h3>Customer_id</h3></th>
			<th bgcolor="000000"><h3>First name</h3></th>
			<th bgcolor="000000"><h3>Last name</h3></th>
			<th bgcolor="000000"><h3>Gender</h3></th>
			<th bgcolor="000000"><h3>Contact no.</h3></th>
			<th bgcolor="000000"><h3>City</h3></th>
			<th bgcolor="000000"><h3>Dob</h3></th>
		    <th bgcolor="000000"><h3>Action</h3></th>
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$n1="select * from registration";
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
		?>
		         <tr>
				  <td align="center"><?php echo $r['C_id'];?></td>
				  <td align="center"><?php echo $r['Firstname'];?></td>    
				  <td align="center"><?php echo $r['Lastname'];?></td>
				  <td align="center"><?php echo $r['Gender'];?></td>
				  <td align="center"><?php echo $r['Contactno'];?></td>
				  <td align="center"><?php echo $r['City'];?></td>
				  <td align="center"><?php echo $r['Dob'];?></td>
				  <td> 
				    <a onclick="return confirm('Are you sure to delete this record?')" href="deleteregistration.php?C_id=<?php echo $r['C_id'];?>"> <span class="glyphicon glyphicon-trash"></span> </a> 
				  </td>	
				 </tr>
	    <?php 
			}
		?>	
</table>
	    </center>
			</td>
			</tr>
<?php		
include "footer.php";
?>