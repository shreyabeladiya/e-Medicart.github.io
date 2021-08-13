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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<style>
	
		.backimg
	{
		background:url(image/1234.jpg);
		
	}
	
	
	</style>
	</head>
	<body class="backimg">
	<center>
	<table border=2 style="border-collapse:collapse" width=1200 height=650 >
		<tr height=100>
			<td align="center" >
				<img src="image/444.GIF" height=150 width=150/>
			</td>
			<td style="font-size:80px; padding-left:90px; font-style:Arial helvetica;color:#3c8dc5;">HEALTH PORTAL</span></td>
		</tr>