<?php
ob_start();
session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
 	echo 'you are logged in.';
   echo '<a href="p4.php">Log Out</a>';
    }
 	else
 		header('Location: p1.html');	

?>