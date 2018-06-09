<?php
	session_start();
	//id is root and no password 
	$conn= mysqli_connect('localhost', 'root', '', 'fc');
	if(!$conn){
		die("connection failed:".mysqli_connect_error());
	}
