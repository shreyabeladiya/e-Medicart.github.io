<?php
include "header.php";

include "link.php";

?>
<?php
	if(isset($_POST['btnok']))
	{
		$n1=$_POST['n1txt'];
		$cat=$_POST['slct'];
		$n2=$_POST['n2txt'];
		$n3=$_POST['n3txt'];
		$n4=$_POST['n4txt'];
		$n5=$_POST['n5txt'];
		$n6=$_POST['n6txt'];
		
		$Product_image=$_FILES['flimg']['name'];
		$ex=explode(".",$Product_image);
		
		if($ex[1]=="jpg" || $ex[1]=="bmp" || $ex[1]=="png")
		{
		$con=mysqli_connect("localhost","root","","hp");
		$r="Insert into productdetail(Product_name,Product_image,Menufacturedate,Expiredate,Price,Company_name,Category_id,description) values('$n1','$Product_image','$n2','$n3','$n4','$n5','$cat','$n6')";
		$p=mysqli_query($con,$r);
		if($p)
		{
		move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$Product_image);
?>	
				<script>
				window.location="productdetail.php";
				</script>
			<?php
					
			}
			else
			{	

			?>	
				<script>
					alert('erorr is generated');
				</script>
			<?php
			}
		}
		else
		{ 
	?>	
				<script>
					alert("Select Only Image file");
				</script>
			<?php
		}
		}
	
?>
 

<form action="#" method="post" enctype="multipart/form-data">
		<td align="center" colspan=2>
		<h2> New product </h2>
			<table border=1 width=500 height=200>   
		
					<tr>
						<td align=center>Select Category</td>
						<td>
							<select name="slct">
								<?php
								$con=mysqli_connect("localhost","root","","hp");
								$q="select * from category";
								$c=mysqli_query($con,$q);
								while($r=mysqli_fetch_array($c))
								{
									?>
									<option value="<?php echo $r['Category_id'];?>"><?php echo $r['Category_name'];?></option>
									<?php
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td align=center>Product_name</td>
						<td><input type="text" name="n1txt" required></td>
					</tr>
					<tr>
					    <td align=center>Image</td>
					    <td><input type="file" name="flimg" required></td>
				    </tr>
                    <tr>
					    <td align=center>Menufacturedate</td>
						<td><input type="txt" name="n2txt" required></td>	
				    </tr>
				    <tr>
					    <td align=center>Expiredate</td>
						<td><input type="txt" name="n3txt" required></td>	
				    </tr>
				    <tr>
					    <td align=center>Price</td>
						<td><input type="tel" name="n4txt" required></td>	
				    </tr>
				    <tr>
					    <td align=center>Company_name</td> 
						<td><input type="txt" name="n5txt" required></td>	
				    </tr>
					<tr>
					    <td align=center>Description</td>
						<td><input type="txt" name="n6txt" required></td>	
				    </tr>
			        <tr>
                        <td align=center><input type="submit" name="btnok" value="SUBMIT"/>
					</td>
					    <td><input type="reset" value="cancel"/></td>
					</tr>
				</table>
</form>				
					
		
			
<?php
include "footer.php";
?>