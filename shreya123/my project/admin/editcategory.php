<?php
			$con=mysqli_connect("localhost","root","","hp");
			$Category_id=$_GET['Category_id'];
			$q="select * from category where Category_id=".$Category_id;
			$c=mysqli_query($con,$q);
			
			while($r=mysqli_fetch_array($c))
			{
				$cnm=$r['Category_name'];
				$cim=$r['Category_image'];
			}

	if(isset($_POST['btnok']))
	{
		
		$Category_id=$_GET['Category_id'];
		if($_POST['nmtxt']=="")
		{
				$nm=$cnm;
		}
		else
		{
		$nm=$_POST['nmtxt'];	
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
	{
		$con=mysqli_connect("localhost","root","","hp");
		$a="update category set Category_name='$nm',Category_image='$im' where Category_id=".$Category_id;
		$c=mysqli_query($con,$a);
		if($c)
		{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
				?>
			<script>
				window.location="category.php";
			</script>
		<?php
	
		}
		else
		{
			echo "Errorrrrr";
		}
	}
	else
	{
		?>
			<script>
				alert('Please select other file');
			</script>
		<?php
	}
	
}


include "header.php";

include "link.php";

?>
		<td align="center" colspan=2>
			<h1>
				Edit Category
			</h1>
			<form action="#" method="post" enctype="multipart/form-data">
			<table border=1 width=500 height=200>   
		
				<tr>
					<td>category_name</td>
					<td><input type="text" name="nmtxt" value="<?php echo $cnm;?>"/></td>
				</tr>
                <tr>
					<td>Image</td>
				    <td><input type="file" name="flimg" /></td>
					<td><img src="upload/<?php echo $cim;?>"height=100 width=100/></td>
				</tr>
			    <tr>
                    <td><input type="submit" name="btnok" value="UPDATE"/></td>
				    <td><input type="reset" value="cancel"/></td>
				</tr>
			</table>
</form>			
			
		
<?php
include "footer.php";
?>