<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Unassigned Items</title>

	<?php require_once "inc/links.php"; ?> 

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 sidebar_asset">
				  <center>
					<p id="R">RMB</p><p id="Rw">(Rwanda Mines Petroleum And Gas Board)</p>
					<p id="A">Asset Management System</p>
					<img class="im" src="lo.PNG" width="50px" height="50px">
				  </center>
				    <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
					<a href="items.php"><i class="fas fa-cogs"></i><span>Item</span></a>
					<a href="employee.php"><i class="fas fa-table"></i><span>Employee</span></a>
					<a href="assign.php"><i class="fas fa-th"></i><span>Assign</span></a>
					<a href="trashed.php"><i class="fas fa-info-circle"></i><span>Trash</span></a>
					<a href="unassigned.php" class="last"><i class="fas fa-sliders-h"></i><span>Unassigned</span></a>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 main_asset">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 head">
						<a href="unassigned.php"><h3>Unassigned<span>items</span></h3></a>
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
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 mid">
						<nav>
						  <ul>
						    <li class="active"><a href="#"><i class="far fa-address-book"></i><span>Unassigned list</span></a></li>
							<li class="addn"><a href="#">(+)Addnew</a></li> 
						    <li><a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a></li>
							</ul>
			     	    </nav>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 content">
						<table>
							<tr>
								<th>Item code</th>
								<th>Item name</th>
								<th>Category</th>
								<th>Op status</th>
								<th>Added time</th>
								<th style="text-align:center">Action</th> 
							</tr>
								<?php require_once "inc/disp_unnsi.php" ?>
						</table>
					</div>
				</div>
				<div class="row addk">
					<div class="col-lg-12 col-md-12 col-sm-12 cont">
						<table>
							<tr>
								<th>Item Number</th>
								<th>Item Name</th>
								<th>Type</th>
								<th>Employee name</th>
								<th>Department</th>
								<th>Data loaned</th>
								<th style="text-align:center">Action</th>
							</tr>
								<?php require_once "inc/disp_assi.php" ?>
						</table>
					</div> 
				</div>	
			</div>
		</div>
	</div>
</body>
<footer>
	<div class="row">
		<div class="col-lg-12 footer">
			<p>Copyright &copy 2020rmb</p>
		</div>
	</div>
</footer>
</html>