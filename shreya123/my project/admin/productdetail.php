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
		<h3><a class="box" href="addproduct.php">Add Product</a></h3></br></br>
			<table border=1 width=auto height=50>   
			<tr>
			<th bgcolor="000000"><h3>Product_id</h3></th>
			<th bgcolor="000000"><h3>Product_name</h3></th>
			<th bgcolor="000000"><h3>Product_image</h3></td>
			<th bgcolor="000000"><h3>Menufacturedate</h3></td>
			<th bgcolor="000000"><h3>Expiredate</h3></td>
			<th bgcolor="000000"><h3>Price</h3></td>
			<th bgcolor="000000"><h3>Company_name</h3></td>
			<th bgcolor="000000"><h3>Description</h3></td>
		    <th bgcolor="000000"><h3>Action</h3></td>

			</tr>
			<?php
	    	 $con=mysqli_connect("localhost","root","","hp");
	   
			
			$n1="select * from productdetail";
			$fl=mysqli_query($con,$n1);
			
			while($r=mysqli_fetch_array($fl))
			{
		?>
		         <tr>
				  <td align="center"><?php echo $r['P_id'];?></td>    
				  <td align="center"><?php echo $r['Product_name'];?></td>
				  <td align="center"><img src="upload/<?php echo $r['Product_image'];?>" height=100 width=100/></td>
				  <td align="center"><?php echo $r['Menufacturedate'];?></td>
				  <td align="center"><?php echo $r['Expiredate'];?></td>
				  <td align="center"><?php echo $r['Price'];?></td>
				  <td align="center"><?php echo $r['Company_name'];?></td>
				  <td align="center"><?php echo $r['description'];?></td>
				  <td> 
				  &nbsp;&nbsp;
					<a href="editproduct.php? P_id=<?php echo $r['P_id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
				     &nbsp;
					<a href="#" onclick="return confirm('Are you sure to delete this record?')" href="deleteproductdetail.php?P_id=<?php echo $r['P_id'];?>& Product_image=<?php echo $r['Product_image'];?>"/> <span class="glyphicon glyphicon-trash"></span> </a> 
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