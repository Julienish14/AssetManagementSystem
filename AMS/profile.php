<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keyword" content="Asset manangement system">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="asset management system">
	<title>Admin Profile</title>
	
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
						<a href="profile.php"><h3>Admin<span>Profile</span></h3></a>
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
					<div class="col-lg-12 col-md-12 col-sm-12 main-profi">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-2"></div>
						    <div class="col-lg-8 col-md-8 col-sm-8 a">
								<form action="">
									<h3>Profile</h3>
									<div class="row">
										<div class="col">
										    <label>full name</label>
										    <input type="text" class="form-control" placeholder="full name">
										</div>
										<div class="col">
										    <label>username</label>
										     <input type="text" class="form-control" placeholder="username">
										</div>
									</div>
									<div class="row">
										<div class="col">
										    <label>Email</label>
										    <input type="text" class="form-control" placeholder="email@gmail.com">
										</div>
									</div>
									<div class="row">
										<div class="col">
										    <label>Password</label>
										    <input type="password" class="form-control" placeholder="Password">
										</div>
									</div>
									<div class="row">
										<div class="col">
											<label>Telephone</label>
											<input type="phone" class="form-control" placeholder="+250 78X XXX XXX">
										</div>
										<div class="col">
											<label>Date of Birth</label>
											<input type="date" class="form-control" placeholder="Date of birth">
										</div>
									</div>
									<div class="row">
										<div class="col">
											<label>Department</label>
											<input type="text" class="form-control" placeholder="department">
										</div>
									</div>
									<div class="row">
		                               	<div class="col">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
										<div class="col">
											<button type="submit" class="btn btn-primary">Delete</button> 
										</div>
		                            </div>
							    </form>
						    </div>
						    <div class="col-lg-2 col-md-2 col-sm-2"></div>
						</div>
				   </div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
	<div class="col-lg-12 footer">
		<p>Copyright &copy 2020rmb</p>
	</div>
</footer>
</html>