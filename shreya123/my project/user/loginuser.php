<?php

include "headeruser.php";

?>
<?php
		if(isset($_POST['btnok']))
		{
			$nm=$_POST['untxt'];
			$pw=$_POST['pwtxt'];
			
			$con=mysqli_connect("localhost","root","","hp");
			$q="SELECT * From registration where Username='$nm' AND password='$pw'";
			$c=mysqli_query($con,$q);
			$r=mysqli_num_rows($c);
			if($r>=1)
			{
					$_SESSION['user']=$nm;
					?>
					<script>
						window.location="index.php";
					</script>
					<?php
			}
			else
			{
				?>
					<script>
						alert('Invalid Username and password');
						window.location="loginuser.php";
					</script>
					<?php
			}
		}
	?>
</br></br>
		<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //end-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
</head>
	<script src="js/jquery.min.js"></script>

<body>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>SignIn HERE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container" align="center">
            <div class="row" >
				<form action="#" method="post" >
					<div class="message warning">
						
		
						<p>User Name 
						<input type="text" name="untxt" required=""/></p>
						<p>Password &nbsp;&nbsp;
						<input type="password" name="pwtxt" required=""/><br></br></p>	 
						
					    <input name="btnok" type="submit" value="LOGIN"></br></br>
						<a href="registrationuser.php" method="post">Create New Account ??</a></br></br>
					</form>  
						</div>					
					</div>
			</div>
		</div>
	</div>
							
</body>
</html>

   
<?php
include "footeruser.php";
?>