<?php 
	//session 
	
	session_start();
	
	echo "session value<br>";
	
	echo "username	".$_SESSION['username']."<br>";
	echo "email	".$_SESSION['email'];
	
?>
