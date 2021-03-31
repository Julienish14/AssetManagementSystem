<?php
	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

	$sql = "SELECT item_codenumber, item_name, category,operation_status,current_status,added_time FROM item WHERE current_status = 'Unassigned' ";

	$result = $con-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>" .$row["item_codenumber"]. "</td><td>" .$row["item_name"]. "</td><td>" .$row["category"]. "</td><td>" .$row["operation_status"]. "</td><td>".$row["added_time"].
					"</td><td style = 'text-align:center'> <i class='fas fa-edit btn btn-success editbtn'></i>".' '.  
			 			"<i class='fas fa-trash btn btn-danger deletebtn'></i>" .
			"</td></tr>";
		}
		echo "</table>";
	}else{
		echo "table is empty";
	}
	$con-> close(); 
?>