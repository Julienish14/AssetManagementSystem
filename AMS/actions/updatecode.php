<?php 
	$con = mysqli_connect('localhost', 'julien', 'Juxjulien14', 'ams') or die("database not connected!");


	if(isset($_POST['Updatedata'])){


		$id = $_POST['update_id'];

		$name = $_POST['fullname'];
		$email = $_POST['email'];
		$tel = $_POST['contact'];
		$dep_id = $_POST['depart_id'];
		//$dep_i = $_POST['depart_i']
		//$dep = $_POST['department'];

		$sql = "UPDATE employee SET fullname='$name', email='$email', telephone='$tel', depart_id = '$dep_id' WHERE ID = '$id' ";
		$check = mysqli_query($con, $sql);

		if($check){
			echo '<script> alert("Data updated correctly!"); </script>';
			header("location:http://localhost:81/files/A/AMS/employee1.php#");
		}else{
			echo '<script> alert("Data not updated"); </script>';
		}
	}
?>