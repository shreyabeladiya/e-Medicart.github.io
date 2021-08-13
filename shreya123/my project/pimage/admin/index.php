<html>
<head>
<style>
	.ab{
		height:30px;
		width:200px;
		}
	.backimg
	{
		background:url(image/1.jpg);
		
	}
</style>
</head>
<body class="backimg">
	<center>
	<fieldset style="width:300px; height:250px; border-radius:50px; background-color:#66cc66; margin-top:140px;">
		<h1>SIGNIN</h1>
		<form name="frm" method="post" action="process.php">
			 <input type="text" class="ab" placeholder="Username Or Email" name="untxt"/><br><br>
			<input type="password" class="ab" placeholder="Password" name="pwtxt"/><br><br>
			<input type="submit" name="btnok" value="login"/>
		</form>
	</fieldset>
	</center>
</html>