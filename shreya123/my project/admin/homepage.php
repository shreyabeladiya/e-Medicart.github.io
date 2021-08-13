<?php
session_start();
if(!isset($_SESSION['admin']))
{
	?>
	<script>
		alert('you have to login first');
		window.location="index.php";
	</script>
    <?php	
}
?>
<html>
	<head>
		<title> Welcome to Admin Panel </title>
	<style>
	
		.backimg
	{
		background:url(image/1234.jpg);
		
	}
	
	</style>
	</head>
	<body class="backimg">
	<center>
	<table border=2 width=1200 height=650 >
		<tr height=100>
			<td align="center" >
				<img src="image/444.GIF" alt="blankimage" height=150 width=150/>
			</td>
			<td style="font-size:80px; padding-left:90px; font-style:Arial helvetica;color:#3c8dc5;">HEALTH PORTAL</span></td>
		</tr>
		<tr height=20>
		    <td style="font-size:20px" colspan=3 >
			    <center>
				<a href ="home.php"><img src="image/ss66.png" height=30 width=30 style="padding-top:20px;"/> Home</span></a> &nbsp &nbsp &nbsp;
				<a href ="registration.php"> <img src="image/ss67.png" height=30 width=30/>  Registration </a> &nbsp &nbsp &nbsp;
				<a href ="category.php"> <img src="image/ss2.png" height=30 width=30/>  Category </a> &nbsp &nbsp &nbsp;
				<a href ="productdetail.php"> <img src="image/ss88.jpg" height=30 width=30/>  Product detail </a> &nbsp &nbsp &nbsp;
				<a href ="order.php"> <img src="image/ss99.png" height=30 width=30/>  Order </a>&nbsp &nbsp &nbsp;
				<a href ="feedback.php"> <img src="image/ss89.png" height=30 width=30/> Feedback </a>&nbsp &nbsp &nbsp;
				<a href ="logout.php"> <img src="image/ss77.png" height=30 width=30/>  Logout </a>&nbsp &nbsp &nbsp;
				</center>
			</td>
	    </tr>
		<tr height=350>
		<td style="font-size:30px" colspan=2 align="center">Welcome<br></br><?php echo $_SESSION['admin'];?><br></br>To<br></br>Admin panel<br></br></td>
		</tr>
			<tr height=70>
				<td style="font-size:20px; font-style:Arial helvetica;color:#3c8dc5;" colspan=2 align="center"> Develop by shreya beladiya<br><br>Urvashi Bhanderi
			</td>
			</tr>	
		</table>	
		</center>
		</body>
		</html>