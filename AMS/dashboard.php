<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
    <meta name="description" content="Asset management system">
	<meta name="keywords" content="Asset management online system">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AssetManagement</title>

	<?php require_once "inc/links.php" ?> 
	<?php require_once "inc/Total_row.php" ?>

</head>
<body class="dashboard">
	<div class="container-fluid">
		<div class="row">
			<div class="dash-head">
				<div class="btn-menu">
			    	<span class="fas fa-bars"></span> 
				</div>
			    <ul>
				    <li>
				    	<a href="#" class="admin-btn">Admin
				    		<i class="fas fa-caret-down first"></i>
				    	</a>
				    	<ul class="admin-show">
				    	    <li><a href="profile.php">Profile</a></li>
	          				<li><a href="logout.php">Logout</a></li>
				    	</ul>
				    </li>
			    </ul>
			</div>
		</div>
		<nav class="sidebar">
		  <center>	
			<p id="R">RMB</p><p id="Rw">(Rwanda Mines Petroleum And Gas Board)</p>
			<p id="A">Asset Management System</p>
			<img class="im" src="lo.PNG" width="50px" height="50px">
		  </center>
			<div class="side">
				<a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
				<a href="items.php"><i class="fas fa-cogs"></i><span>Item</span></a>
				<a href="employee.php"><i class="fas fa-table"></i><span>Employee</span></a>
				<a href="assign.php"><i class="fas fa-th"></i><span>Assign</span></a>
				<a href="trashed.php"><i class="fas fa-trash"></i><span>Trash</span></a>
				<a href="unassigned.php" class="last"><i class="fas fa-sliders-h"></i><span>Unassigned</span></a>
			</div>
		</nav>
		<div class="row">
			<div class="main">
			<div class="dash">
			    <h4 href="dashboard.php">Dashboard</h4>
				
				<a href="items.php" id="assets">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					<p>items</p> <b>Total <?php echo "(".$num2.")" ?> </b>
				    </div>
				</a>
				<a href="employee.php" class="employee">
					<div >
						<i class="fas fa-address-card"></i>
					<p>employee</p> <b>Total <?php echo "(".$num1.")" ?> </b>
				    </div>
				</a>
				<a href="assign.php" class="assigned">
					<div>
						<i class="fab fa-atlassian"></i>
					<p>assigned</p> <b>Total <?php echo "(".$num3.")" ?> </b>
					</div>
				</a>
				<a href="unassigned.php" class="unassigned">
					<div>
					  <i class="far fa-address-book"></i> 
					 <p>unassigned</p> <b>Total <?php echo "(".$num4.")" ?> </b>
					</div>
				</a>
				<a href="trashed.php" class="trashed">
					<i class="fas fa-trash"></i>
					<div>
					<p>trashed</p> <b>Total <?php echo "(".$num5.")" ?> </b>
					</div>
				</a>
				<a href="department.php" class="depart">
					<div>
						<i class="far fa-address-book"></i>
					<p>department</p> <b>Total <?php echo "(".$num.")" ?> </b>
					</div>
				</a>		
	        </div>
			</div>
		<div class="col-lg-12 footer">
			<p>Copyright &copy 2020rmb</p>
		</div>
</body>
</html>