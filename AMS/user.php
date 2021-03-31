<?php 
	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die('database not connected');

	$delete = "DELETE FROM employee WHERE ID = $_POST['ID']";

	$dele = mysqli_query($con, $delete);

	if($dele){
		echo "employee deleted!";
	}else{
		echo "employee not deleted!";
	}
?>