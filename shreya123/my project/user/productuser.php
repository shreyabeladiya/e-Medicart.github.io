<?php

	include "headeruser.php";
	
?>	
<style>

	.box
	{
		border:2px solid black;

		border-radius:30px;
		color:black;
		height:30px;
		width:200px;
		padding-left:20px;
		padding-right:20px;
		

	}
</style>

<?php
	$con=mysqli_connect("localhost","root","","hp");
	
	$cid=$_REQUEST['Category_id'];
	$a="select * from productdetail where Category_id=".$cid;
	$c=mysql_query($con,$a);
	$counter=0;
?>
<table width=600px height=400>
		<?php
			
			while($r=mysqli_fetch_array($c))
			{
				if($counter%3==0)
				{
				?>
					<tr>
				<?php
				}
				$counter++;
			?>				<td>
					<a href="prodcutdetail.php?pid=<?php echo $r['P_id'];?>">
					<img style="border-radius:20px" src="admin/upload/<?php echo $r['Product_image'];?>" height=120px width=150/><br><br>
					<b class="box" style="color:#00cc99; size:3px; margin-left:20px;"><?php echo $r['Product_name'];?></b>
			</a>
			</td>
				<?php
				if($counter%3==0)
				{
				?>
					</tr>
				<?php
				}
			}
		?>
	
	
</table>
<?php

	include "footeruser.php";
	
?>	