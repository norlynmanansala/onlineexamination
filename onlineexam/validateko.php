<?php 
require 'config.php';

$email = $_POST['email'];
$password = $_POST['pass'];
echo $email;
echo $password;
$sql = "SELECT * FROM examinee where email = '$email' And password = '$password'";
$query = mysql_query($sql);
if($query){
	if(mysql_num_rows($query)>0){
		echo "ok na";
	}else{
	echo "tapos";

	}
}
 ?>