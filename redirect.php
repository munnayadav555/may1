<?php
ob_start();
session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
 	echo 'you are logged in.';
   echo '<a href="logout.php">Log Out</a>';
    //echo '<button type="button" onclick="aler()">Click Me</button>';
 }
 	else
 		include 'login.html';	


 	
?>