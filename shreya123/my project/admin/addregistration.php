<?php
include "header.php";

include "link.php";

?>
<?php
	if(isset($_POST['btnok']))
	{
		$r1=$_POST['r1txt'];
		$r2=$_POST['r2txt'];
		$r3=$_POST['r3txt'];
		$r4=$_POST['r4txt'];
		
		$con=mysqli_connect("localhost","root","","hp");
		
		$r="Insert into cart(Firstname,Lastname,C_id,Dob) values('$r1','$r2','$r3','$r4')";
		$p=mysqli_query($con,$r);
		if($p)
		{
			echo"successfully Insert";
		}
		else
		{ 
			echo"successfully not Insert";
		}	
	}
?>
 

<form action="#" method="post" enctype="multipart/form-data">
		<td align="center">
			<table border=1 width=500 height=200>   
		
					<tr>
						<td>Firstname</td>
						<td><input type="text" name="r1txt"/></td>
					</tr>
                <tr>
					    <td>Lastname</td>
						<td><input type="txt" name="r2txt"/></td>	
				</tr>
				<tr>
					    <td>C_id</td>
						<td><input type="txt" name="r3txt"/></td>	
				</tr>
				<tr>
					    <td>Dob</td>
						<td><input type="txt" name="r4txt"/></td>	
				</tr>
				
			        <tr>
                        <td><input type="submit" name="btnok" value="INSERT"/>
					</td>
					    <td><input type="reset" value="cancel"/></td>
					</tr>
				</table>
</form>				
					
		
			
<?php
include "footer.php";
?>