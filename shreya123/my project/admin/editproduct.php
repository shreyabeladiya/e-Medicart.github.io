<?php
            $con=mysqli_connect("localhost","root","","hp");
			$Product_id=$_GET['P_id'];
			$a="select * from productdetail where P_id=".$Product_id;
			$c=mysqli_query($con,$a);
			while($r=mysqli_fetch_array($c))
			{
				$n1=$r['Product_name'];
				$cim=$r['Product_image'];
				$n2=$r['Menufacturedate'];
				$n3=$r['Expiredate'];
				$n4=$r['Price'];
				$n5=$r['Company_name'];
				$n6=$r['description'];
				
				
			}	
			
	if(isset($_POST['btnok']))
	{
		$Product_id=$_GET['P_id'];
		$n1=$_POST['n1txt'];
		$n2=$_POST['n2txt'];
		$n3=$_POST['n3txt'];
		$n4=$_POST['n4txt'];
		$n5=$_POST['n5txt'];
        $n6=$_POST['n6txt'];		
		}
		if($_FILES['flimg']['name']=="")
		{
			$im=$cim;
		}
		else
		{
		$im=$_FILES['flimg']['name'];		
	}
	
	
	$ex=explode(".",$im);
	if($ex[1]=="jpg" || $ex[1]=="bmp" || $ex[1]=="png" || $ex[1]=="JPG" || $ex[1]=="BMP" || $ex[1]=="PNG")
		
		$con=mysqli_connect("localhost","root","","hp");
		$a="update productdetail set Product_name='$n1',Product_image='$im',Menufacturedate='$n2',Expiredate='$n3',Price='$n4',Company_name='$n5',description='$n6' where P_id=".$Product_id;
		$p=mysqli_query($con,$a);
		if($p)
			{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
				?>
			<script>
				window.location="productdetail.php";
			</script>
		<?php
	
		}
		else
		{
			echo "Errorrrrr";
		}
	
	
	{
		?>
			<script>
				alert('Please select other file');
			</script>
		<?php
	}
	
include "header.php";

include "link.php";
?> 

		<td align="center" colspan=2>
		<h1>
				Edit Product
		</h1>
            <form action="#" method="post" enctype="multipart/form-data">			
		    <table border=1 width=500 height=200>
					<tr>
						<td>Product_name</td>
						<td><input type="txt" name="n1txt" value="<?php echo $n1; ?>"/></td>
					</tr>
					<tr>
					    <td>Image</td>
				        <td><input type="file" name="flimg" /></td>
					    <td><img src="upload/<?php echo $cim;?>"height=100 width=100/></td>
				</tr>
                <tr>
					    <td>Menufacturedate</td>
						<td><input type="txt" name="n2txt" value="<?php echo $n2; ?>"/></td>	
				</tr>
				<tr>
					    <td>Expiredate</td>
						<td><input type="txt" name="n3txt" value="<?php echo $n3; ?>"/></td>	
				</tr>
				<tr>
					    <td>Description</td>
						<td><input type="txt" name="n6txt" value="<?php echo $n6; ?>"/></td>	
				</tr>
				<tr>
					    <td>Price</td>
						<td><input type="txt" name="n4txt" value="<?php echo $n4; ?>"/></td>	
				</tr>
				<tr>
					    <td>Company_name</td>
						<td><input type="txt" name="n5txt" value="<?php echo $n5; ?>"/></td>	
				</tr>
			        <tr>
                        <td><input type="submit" name="btnok" value="Update"/>
					</td>
					    <td><input type="reset" value="cancel"/></td>
					</tr>
				</table>
</form>				
					
		
			
<?php
include "footer.php";
?>