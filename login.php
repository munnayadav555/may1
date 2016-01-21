<?php
ob_start();
session_start();
echo $user=$_POST['username'];
echo $pass=$_POST['password'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

//$user='username';
//$pass='password';

$conn = @mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ){
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT id, user_name, pass_word FROM my_login_details WHERE user_name='$user' AND pass_word='$pass'";

mysql_select_db('my_project');
$retval = mysql_query( $sql, $conn );
if(mysql_num_rows($retval) == 1) {
 echo $user_id=mysql_result($retval, 0, 'id');
 $_SESSION['user_id']=$user_id;
 header('Location: redirect.php'); // redirecting to the hindu after login
 }
else {
	die('Username or Password is incorrect');
}
mysql_close($conn);

?>

