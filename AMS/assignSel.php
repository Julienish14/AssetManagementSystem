<?php
$table = "department";
$colname = "department_name";

$table = "department";
$coname = "department_id";

$tab = "employee";
$col = "fullname";

$itmTab = "item";
$itm_col = "item_name";
$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database is not connected!");

$query = "SELECT * FROM $table";
$result = mysqli_query($con, $query);

$query1 = "SELECT * FROM $tab";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM $itmTab WHERE current_status = 'Unassigned' and operation_status = 'Working'";
$result2 = mysqli_query($con, $query2);
?>