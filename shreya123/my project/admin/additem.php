<?php
include "header.php";

include "link.php";

?>
<?php
	if(isset($_POST['btnok']))
	{
		$Category_name=$_POST['nmtxt'];
		$Category_image=$_FILES['flimg']['name'];
		
		$ex=explode(".",$Category_image);
		
		if($ex[1]=="jpg" || $ex[1]=="bmp" || $ex[1]=="png")
		{
			$con=mysqli_connect("localhost","root","","hp");
			$q="Insert INTO category(Category_name,Category_image) values('$Category_name','$Category_image')";
		    $c=mysqli_query($con,$q);
			if($c)
			{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$Category_image);
?>	
				<script>
				window.location="category.php";
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
		<h2> New item</h2>
			<table border=1 width=500 height=200>   
		        
				<tr>
					<td align=center>category_name </td>
					<td><input type="text" name="nmtxt" required/></td>
				</tr>
                <tr>
					<td align=center>Image</td>
					<td><input type="file" name="flimg" required/></td>
				</tr>
			    <tr>
                    <td align=center><input type="submit" name="btnok" value="INSERT"/></td>
				    <td align=center><input type="reset" name="btnok" value="cancel"/></td>
				</tr>
			</table>
</form>				
		
			
<?php
include "footer.php";
?>




