<?php
	$con = mysqli_connect('localhost', 'julien', 'Juxjulien14', 'ams') or die("db ain't connected!");

if(isset($_POST['deletedata'])){

	$deleteid = $_POST['delete_id'];

	$sql = "DELETE FROM employee WHERE ID = '$deleteid'";

	$che = mysqli_query($con, $sql);

	if($che){
		echo "<script> alert('Data deleted!'); </script>";
		header('location:http://localhost:81/files/A/AMS/employee1.php');
	}else{
		echo "<script> alert('Data ain't deleted! ')</script>";
	}
}
?>