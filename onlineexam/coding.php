<?php 
	include 'config.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = mysql_query("INSERT INTO examinee(fname,lname,email,password) VALUES ('$fname', '$lname','$email','$password')");
	if($sql){
		header("location:front.php");
	}

 ?>