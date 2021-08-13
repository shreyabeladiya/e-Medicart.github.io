<?php
	include "headeruser.php";
	$con=mysqli_connect("localhost","root","","hp");
	$cid=$_REQUEST['cid'];
	$q="DELETE from cart where C_id=".$cid;
	$c=mysqli_query($con,$q);
?>
<script>
	alert('Remove Succesfully');
	window.location="cart.php";
</script>
	
	
	