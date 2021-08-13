<?php
include "header.php";

include "link.php";

?>
<?php
	if(isset($_POST['btnok']))
	{
		$f1=$_POST['f1txt'];
		$f2=$_POST['f2txt'];
	
		
		$con=mysqli_connect("localhost","root","","hp");
		
		$r="Insert into order(U_name,Viewmessage) values('$f1','$f2')";
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
					    <td>U_name</td>
						<td><input type="txt" name="f1txt"/></td>	
				</tr>
				<tr>
					    <td>Viewmessage</td>
						<td><input type="txt" name="f2txt"/></td>	
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