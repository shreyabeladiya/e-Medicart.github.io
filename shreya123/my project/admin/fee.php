<?php
include "header.php";

include "link.php";

?>
<style>
	h3{color:white;}

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
			<tr style="height:50px;">
			<th bgcolor="000000"><h3>User_id</h3></th>
			<th bgcolor="000000"><h3>User_name</h3></th>
			<th bgcolor="000000"><h3>View message</h3></th>
			<th bgcolor="000000"><h3>Action</h3></th>
			</tr>
			
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$n1="select * from feedback";
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
		?>
		         <tr style="padding:5px;">
				  <td><?php echo $r['User_id'];?></td>    
				  <td><?php echo $r['User_name'];?></td>
				  <td><?php echo $r['Viewmessage'];?></td>
				  <td> 
				    <a  class="box" onclick="return confirm('Are you sure to delete this record?')" href="deletefeedback.php?U_id=<?php echo $r['U_id'];?>"> Delete </a> 
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