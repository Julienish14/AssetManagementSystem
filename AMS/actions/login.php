<?php

$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("database ain't connected");


$email = $_POST['email'];
$password = $_POST['password'];
$s = " SELECT * FROM users WHERE (email = '$email' or username = '$email') and password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num == 1) {
	echo "Your loggin successfully!";
	 
	header('location:http://localhost:81/files/A/AMS/dashboard.php');

	
}else{
	echo "You Loggin failed!";
	header('location:http://localhost:81/files/A/');	
}
?>
