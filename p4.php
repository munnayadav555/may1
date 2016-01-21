<?php
ob_start();
session_start();
//$http_refer=$_SERVER['HTTP_REFERER'];
 		
 		session_destroy();

 		header('Location: p1.html');
 		echo 'hello';
?>
