<?php
session_start();


$con = mysqli_connect('localhost','julien','Juxjulien14','ams')or die("Database is not connected!");


//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
if(isset($_POST['submit'])){
	$first = $_POST['firstname'];
	$second = $_POST['secondname'];
	$DoB = $_POST['dateOfBirth'];
	$depart = $_POST['department'];
	$phone = $_POST['telephone'];
	$username = $_POST['username'];

	$email = $_POST['email'];

	$password = $_POST['password'];

	$s = " SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		echo "You already have an account!";

	}else{
		$insert = " INSERT INTO users(firstname, secondname, dateOfBirth, department, telephone, username, email, password) VALUES ('$first','$second','$DoB','$depart','$phone','$username',LOWER('$email'),'$password')";
        $done = mysqli_query($con,$insert);
		if($done){
			//echo "data inserted correctly";
			header('location:http://localhost:81/files/A');
		}
		else{
			echo "Data is not inserted!";
		}
		
		//echo "You are registered Successful! <br>";
		
	} 
 
}elseif (isset($_POST['cancel'])) {
	//echo "This is canceled!";
	header('location:http://localhost:81/files/A');

}
else{
	echo "Something Went Wrong";
}
	


?>
