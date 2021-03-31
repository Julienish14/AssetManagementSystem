<?php
	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database couldn't connected!");

	$empName = $_POST['emp_name'];
	$itemName = $_POST['item_name'];
	$itemNumb = $_POST['item_number'];
	$itemid = $_POST['item_id'];
	$assign = $_POST['assign'];
	$empId = $_POST['emp_id'];
	$date = $_POST['datet'];
/* 	item.current_status = 'Assigned'  */
	if(isset($_POST['update'])){
		$sql = "UPDATE employee SET item_id = '$itemid' WHERE ID = '$empId' ";
		$sqli = "UPDATE item SET current_status = '$assign', emp_id = '$empId', loaned_time = '$date' WHERE item_codenumber = '$itemNumb' ";

		$result = mysqli_query($con, $sql);
		$res = mysqli_query($con, $sqli);

		if($result and $res){
			//echo "Data updated!";
			header('location: http://localhost:81/files/A/AMS/assign.php');
		}else{
			echo "Data ain't updated!";
		} 
	}elseif(isset($_POST['cancel'])){
		header('location: http://localhost:81/files/A/AMS/assign.php');
	}else{
		echo "This is wrong!";
	}
?>