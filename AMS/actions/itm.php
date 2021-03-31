<?php 
	session_start();

	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

 if(isset($_POST['save'])){
 	for($b = 0; $b < count($_POST["item_codenumb"]); $b++){
		$code = $_POST['item_codenumb'][$b];
		$name = $_POST['item_name'][$b];
		$cate = $_POST['category'][$b];
		$op_sta = $_POST['operation_status'][$b];
		$cu_sta = $_POST['current_status'][$b];

			$check = "SELECT * FROM item WHERE item_codenumber = '$code'";

				$result = mysqli_query($con, $check);
				$num = mysqli_num_rows($result);

					if($num == 1){
		 				echo "This item code number " .$code. " is registed ";
		 				exit();
		 			}else{

		$sql = "INSERT INTO item(item_codenumber, item_name, category, operation_status, current_status) 
		VALUES ('" .$code. "','" .$name. "','" .$cate. "','" .$op_sta. "','" .$cu_sta. "')";

		$res = mysqli_query($con,$sql);
	    } 
	}

	if ($res) {
		//echo "Data inserted correctly!";
		header('location: http://localhost:81/files/A/AMS/items.php');    
	}else{
		echo "Not inserted!";
	}
 }elseif(isset($_POST['cancel_new'])){
	header('location: http://localhost:81/files/A/AMS/items.php');
	
}	
?>