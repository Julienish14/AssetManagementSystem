<?php 
$con = mysqli_connect('localhost','julien','Juxjulien14','ams') or die("Database ain't connected!");

$dep = "SELECT count(ID) AS total FROM department";
$res = mysqli_query($con, $dep);
$va = mysqli_fetch_assoc($res);
$num  = $va['total'];

$emp = "SELECT count(ID) AS total FROM employee";
$res1 = mysqli_query($con, $emp);
$va1 = mysqli_fetch_assoc($res1);
$num1 = $va1['total'];

$itm = "SELECT count(ID) AS total FROM item "; 
// WHERE operation_status = 'Working' and current_status = 'Unassigned' "; 
$res2 = mysqli_query($con, $itm);
$va2 = mysqli_fetch_assoc($res2);
$num2 = $va2['total'];

$ass = "SELECT count(ID) AS total FROM item WHERE current_status = 'Assigned'";
$res3 = mysqli_query($con, $ass);
$va3 = mysqli_fetch_assoc($res3);
$num3 = $va3['total'];

$unass = "SELECT count(ID) AS total FROM item WHERE current_status = 'Unassigned'";
$res4 = mysqli_query($con, $unass);
$va4 = mysqli_fetch_assoc($res4);
$num4 = $va4['total'];

$tras = "SELECT count(ID) AS total FROM item WHERE operation_status = 'Not working'";
$res5 = mysqli_query($con, $tras);
$va5 = mysqli_fetch_assoc($res5);
$num5 = $va5['total'];


?>