<?php

	include "headeruser.php";
	
?>	
<?php
	$con=mysqli_connect("localhost","root","","hp");
	
	$pid=$_REQUEST['P_id'];
	$a="select * from productdetail where P_id=".$pid;
	$c=mysqli_query($con,$a);
	
?>
<table width=400px height=400>
		<tr>
		<?php
			
			while($r=mysqli_fetch_array($c))
			{
				
				
			?>		<td>
									
					<img style="border-radius:20px" src="admin/upload/<?php echo $r['Product_image'];?>" height=220px width=150/><br><br>
					</td>
					<td>
						<h1 style="color:#00cc99; size:3px; margin-left:10px;"><?php echo $r['Product_name'];?></h1>
						<b>Menufacturedate:</b><?php echo $r['menufacturedate'];?><br><br>
						<b>Expiredate:</b><?php echo $r['Expiredate'];?><br><br>
						<b>Company_name:</b><?php echo $r['Company_name'];?><br><br>
						<b>Price : </b><?php echo $r['Price'];?><br><br> 
			
					</td>
			<?php
			}
		?>
		</tr>
	
	
</table>
<?php

	include "footeruser.php";
	
?>	