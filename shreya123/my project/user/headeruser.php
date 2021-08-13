<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e MEDICART</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php">e<span>MEDICART</span></a></h1>
                    </div>
                </div>
                <?php
				if(isset($_SESSION['user']))
				{
					?>
				<div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <img src="shopping-cart-img.jpg" height=20 width=20/></a>
                    </div>
                </div>
				<?php
				}
				?>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
       <?php
	   if(isset($_SESSION['user']))
	   {
		?>
			<li><a href="index.php">Home</a></li>
            <li><a href="medicineuser.php">Medicine</a></li>
            <li><a href="feedbackuser.php">Feedback</a></li>
            <li><a href="contactus.php">Contact</a></li>
			<li><a href="Myorder.php">Myorder</a></li>
            <li><a href="logout.php">Logout</a></li>
	
	</ul>
         
<?php		
	   }
	   else
	   {
		?>				
						<li><a href="index.php">Home</a></li>
                        <li><a href="medicineuser.php">Medicine</a></li>
                        
                        <li><a href="feedbackuser.php">Feedback</a></li>
                        
                        <li><a href="contactus.php">Contact</a></li>
						<li><a href="loginuser.php">Login</a></li>
                    </ul>
         <?php
	   }
	   ?>
		       </div>  
            </div>
        </div>
    </div>