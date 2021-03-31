<?php
	

$table = "department";
$colname = "department_name";
$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

$query = "SELECT * FROM $table";
$result = mysqli_query($con, $query);


$table = "department";
$coname = "department_name";
$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

$sql = "SELECT * FROM $table";
$res = mysqli_query($con, $sql);


/*  */
?>