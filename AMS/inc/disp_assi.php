<?php
	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

	$sql = "SELECT item.item_codenumber, item.item_name, item.category,item.loaned_time, employee.fullname, department.department_name FROM item,employee,department WHERE item.current_status = 'Assigned' and item.emp_id = employee.ID and employee.depart_id = department.ID ";

	$result = $con-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>" .$row["item_codenumber"]. "</td><td>" .$row["item_name"]. "</td><td>" .$row["category"]. "</td><td>" .$row["fullname"]. "</td><td>" .$row["department_name"]."</td><td>".$row["loaned_time"]. 
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