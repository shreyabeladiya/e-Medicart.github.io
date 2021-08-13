<?php

include "headeruser.php";

?>
		
<?php
		if(isset($_POST['btnok']))
		{
			$yr=$_POST['yrtxt'];
			$ye=$_POST['yetxt'];
			$ym=$_POST['ymtxt'];
			$date=date('d-m-y');
			
			$con=mysqli_connect("localhost","root","","hp");
			$q="INSERT INTO feedback(User_name,Message,date,Email) values ('$yr','$ye','$ym','$date')";
			$c=mysqli_query($con,$q);
			
			if($c)
			{
				echo"send feedback";
			}
			else
			{
				echo"feedback not send properly";
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
                        <h2>YOUR FEEDBACK</h2>
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
						
		
						<p>YOUR NAME:&nbsp;&nbsp
						<input type="text" name="yrtxt" required=""/></p>
						<p>YOUR EMAIL: &nbsp;&nbsp;
						<input type="email" name="yetxt" required=""/><br></br></p>	 
						<p>YOUR MESSAGE:&nbsp;&nbsp;
						<textarea name="ymtxt" rows="7" cols="30" required></textarea><br></br>
						</br>
					    <input name="btnok" type="submit" value="send"></br></br>
						
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