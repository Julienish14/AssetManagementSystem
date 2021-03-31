<?php 
	session_start();

	$con = mysqli_connect('localhost','julien','Juxjulien14','ams')or die("Database is not connected!");
if(isset($_POST['save'])){
	for($a = 0; $a < count($_POST["fullname"]); $a++){
		$fullname = $_POST['fullname'][$a];
		$email = $_POST['email'][$a];
		$contact = $_POST['contact'][$a];
		$department = $_POST['depart_id'][$a];

			$check = "SELECT * FROM employee WHERE email = '$email'";

			$result = mysqli_query($con, $check);
			$num = mysqli_num_rows($result);

				if($num == 1){
	 				echo "This email " .$email. " is already exist added in system ";
	 				exit();
	 			}else{
		    $sql = "INSERT INTO employee(fullname, email, telephone, depart_id) 
		    VALUES ('$fullname','$email','$contact','$department')";
	    $res =  mysqli_query($con,$sql);
	    }
	}    
	if($res){
	   	//echo "Data inserted correctly!";
		header('location: http://localhost:81/files/A/AMS/employee.php');
    }else{
	    echo "Data is not inserted!";
    }
}elseif(isset($_POST['cancel_new'])){
	header('location: http://localhost:81/files/A/AMS/employee.php');
}else{
	echo"Wrong!";
}
	
	
	

?>