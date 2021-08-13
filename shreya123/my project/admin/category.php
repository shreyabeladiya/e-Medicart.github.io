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
			<a class="box" href="additem.php"> Add New Item</a></br></br></br>
			<table border=1 width=600 height=50>   
			<tr style="height:50px;">
			<th bgcolor="000000"><h3>Category_id</h3></th>
			<th bgcolor="000000"><h3>Category_name</h3></th>
			<th bgcolor="000000"><h3>Category_image</h3></th>
			<th bgcolor="000000"><h3>Action</h3></th>
			</tr>
			
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$q="select * from category";
			$c=mysqli_query($con,$q);
			
			while($r=mysqli_fetch_array($c))
			{
		?>
		         <tr style="padding:5px;">
				  <td align="center"><?php echo $r['Category_id'];?></td>    
				  <td align="center"><?php echo $r['Category_name'];?></td>
				  <td align="center"><img src="upload/<?php echo $r['Category_image'];?>" height=100 width=100/></td>
				  <td>		
				    <a onclick="return confirm('Are you sure to delete this record?')" href="deletecategory.php?Category_id=<?php echo $r['Category_id'];?> & Category_image=<?php echo $r['Category_image'];?>"/><span class="glyphicon glyphicon-trash"></span>  </a> &nbsp;
				    <a onclick="" href="editcategory.php?Category_id=<?php echo $r['Category_id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
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