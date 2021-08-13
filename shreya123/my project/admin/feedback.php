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
			<th bgcolor="000000"><h3>User_id</h3></th>
			<th bgcolor="000000"><h3>User_name</h3></th>
			<th bgcolor="000000"><h3>Message</h3></th>
			<th bgcolor="000000"><h3>Date</h3></th>
			<th bgcolor="000000"><h3>Email</h3></th>
		    <th bgcolor="000000"><h3>Action</h3></th>
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$n1="select * from feedback";
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
		?>
		         <tr>
				  <td align=center><?php echo $r['User_id'];?></td>
				  <td align=center><?php echo $r['User_name'];?></td>    
				  <td align=center><?php echo $r['message'];?></td>
				  <td align=center><?php echo $r['date'];?></td>
				  <td align=center><?php echo $r['Email'];?></td>
				  <td> 
				    <a onclick="return confirm('Are you sure to delete this record?')" href="deletefeedback.php?User_id=<?php echo $r['User_id'];?>"> <span class="glyphicon glyphicon-trash"></span> </a>  
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