<?php 
	//Create a Session
	session_start();
	
	$_SESSION['username']='deepak';
	$_SESSION['email']='email';
	
	echo "session set ";
?>