<?php
	$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

	$sql = "SELECT ID, department_name, location, director FROM department WHERE 1";

	$result = $con-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>" .$row["ID"]. "</td><td>" .$row["department_name"]. "</td><td>" .$row["location"]. "</td><td>" .$row["director"]."</td><td style='text-align:center;'>"."<button class='btn btn-success'>Edit</button>".'  ' ."<button class='btn btn-danger'>Delete</button>"."</td></tr>";
		}
		echo "</table>";
	}else{
		echo "table is empty";
	}
	$con-> close(); 
?>