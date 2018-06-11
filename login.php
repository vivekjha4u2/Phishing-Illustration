<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css" >
<title> Login </title>
</head>

<body background="rfc.png">

<div class="in">
<div id="innerdiv">
	
	<form action="log.php" method="post">
		
		<input id="user" type="text" name="uid" placeholder=" Admision No / Employee Id"  > <br>
		<input id="pass" type="password" name="pwd" placeholder=" Password"><br>
			<img id="capimg" src="simpleCaptcha.jpg"/><br>
		<input id="cap" type="text" placeholder=" Enter Captcha"><br>
		
		
<a href="page2.html"><button id="login" type="submit"> Login </button></a><br><br><br>
	</form>
</div>	
		
</div>



</body>
</html>