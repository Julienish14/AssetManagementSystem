<?php
require_once "links.php";

$con = mysqli_connect('localhost', 'julien', 'Juxjulien14','ams') or die("DB not connected!");


$val = $_GET["value"];
$val_M = mysqli_real_escape_string($con, $val);

$sql = "SELECT  employee.ID, employee.fullname FROM employee,department WHERE employee.depart_id = department.ID and employee.fullname = '$val_M' ";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
	echo "<select class='form-control'>";
	while($rows = mysqli_fetch_assoc($result)){
		echo "<option>".$rows["ID"]."</option>";
	}
	echo "</select>";
}else{
	echo "<select>
	<option> No Employee ID</option>
	</select>";
}
?>