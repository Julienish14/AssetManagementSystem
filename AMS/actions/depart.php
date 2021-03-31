<?php

	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

	if(isset($_POST['submit'])){
		$depart = $_POST['department'];
		$block = $_POST['location'];
		$director = $_POST['director'];

		$che = "SELECT * FROM department WHERE department_name = '$depart'";
		$check = mysqli_query($con,$che);
		$num = mysqli_num_rows($check);

		if($num == 1){
			echo "This department is already in database!";
		}else{

			$sql = "INSERT INTO department(department_name, location, director) 
			VALUES ('$depart','$block','$director')";

			$res = mysqli_query($con,$sql);
			if($res){
				echo "Department info inserted correctly!";
			}else{
			echo "Data not inserted!";
			}
		}

	}elseif(isset($_POST['cancel'])){
		//echo "canceled";
		header('location: http://localhost:81/files/A/AMS/department.php');

	}else{
		echo "Wrong";
	}

?>