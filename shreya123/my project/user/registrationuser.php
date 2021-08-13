<?php

include "headeruser.php";

?>
		
<?php
	if(isset($_POST['btnok']))
	{
		$un=$_POST['untxt'];
		$fn=$_POST['fntxt'];
		$ln=$_POST['lntxt'];
		$pw=$_POST['pwtxt'];
		$cp=$_POST['cptxt'];
		$ei=$_POST['eitxt'];
		$gn=$_POST['gntxt'];
		$db=$_POST['dbtxt'];
		$ct=$_POST['cttxt'];
		$cn=$_POST['cntxt'];
		
			$con=mysqli_connect("localhost","root","","hp");
			$q="INSERT INTO registration(Username,Firstname,Lastname,Password,Confirmpassword,Email,Gender,Dob,City,Contactno) values('$un','$fn','$ln','$pw','$cp','$ei','$gn','$db','$ct','$cn')";
			$c=mysqli_query($con,$q);
				
			if($c)
			{
				echo"successfully inserted";
				
			}
			else
			{
				echo"error";
			    
			}
	}
?>	

<style>
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width:600px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>REGISTRATION</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
		<div class="message warning">
			<div class="inset agile">
			
<form method="post" action="#" align="center" enctype="multipart/form-data">
<table border="0" width="150" align="center" class="demo-table">
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="untxt" required></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="fntxt" required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lntxt" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="pwtxt" required></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="cptxt" required></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" class="demoInputBox" name="eitxt" required></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gntxt"> Male
<input type="radio" name="gntxt"> Female
</td>
</tr>
<td>D/O/B</td>
<td><input type="text" class="demoInputBox" name="dbtxt" required ></td>
</tr>
<td>City</td>
<td><input type="text" class="demoInputBox" name="cttxt" required></td>
</tr>
<td>Contact no.</td>
<td><input type="tel" pattern="^\d{10}$" class="demoInputBox" name="cntxt" required></td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions 
<input type="submit" name="btnok" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</div></div>
	
<?php
include "footeruser.php";
?>