<?php 
	 require_once "inc/links.php"; 

	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");
// "</td><td>".$row["item_name"].   and employee.item_id =item.ID  , item.item_name item
	$sql = " SELECT employee.ID, employee.fullname, employee.email, employee.telephone, employee.added_time, department.department_name FROM employee, department WHERE employee.depart_id = department.ID ";
	$result = $con-> query($sql);
	//$result = mysqli_query($con, $sql);
	if($result-> num_rows > 1){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td style='padding-right:10px'>" .$row["ID"]. "</td><td>" .$row["fullname"]. "</td><td>" .$row["email"]. "</td><td>" .$row["telephone"]. "</td><td>".$row["department_name"].
			 "</td><td style = 'text-align:center'> <i class='fas fa-edit btn btn-success editbtn'></i>".' '.  
			 			"<i class='fas fa-trash btn btn-danger deletebtn'></i>"  . 
			 "</td></tr>";

			/* <i class='fas fa-trash' style='text-align:center;color:orange'></i> 
			<i class='fas fa-edit' style='text-align:center;margin-left:10px;color:red'></i>*/
		}
		echo "</table>";
	}else{
		echo "table is empty";
	}
	$con-> close();

 ?>