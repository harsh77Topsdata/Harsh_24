<?php 
	//Create Cookie
	setcookie("user", 'Deepak', time() + 3600, '/');
	 echo "Cookie is set!<br>";
    echo "User: " . $_COOKIE['user'];
	echo "<br><a href='cookie_view.php'>Go to retrieve cookie</a>";
?>