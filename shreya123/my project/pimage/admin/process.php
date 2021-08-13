<?php
	$un=$_POST['untxt'];
	$pw=$_POST['pwtxt'];
	
	if($un=="admin" && $pw=="admin123")
	{
		?>
		<script>
			window.location="home.php";
		</script>
		
		<?php
	}
	else
	{
			?>
			<script>
				alert('Invalid Username Password');
				window.location="index.php";
			</script>
			<?php
	}
?>











