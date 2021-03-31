<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
    <meta name="description" content="Asset management system">
	<meta name="keywords" content="Asset management online system">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Department Pages</title>

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
						<a href="department.php"><h3>department</h3></a>
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
						    <li class="active"><a href="#"><i class="far fa-address-book"></i><span>department list</span></a></li>
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
							    <th>ID</th>
								<th>department</th>
								<th>location</th>
								<th>director</th>
								<th style="text-align: center;">action</th> 
							</tr>
								<?php require_once "inc/disp_depart.php" ?>
						</table>
					</div>
					<div class="row add">
						<div class="row justify-content-center">
							<form method="POST" action="actions/depart.php">
								<div class="row">
		                            <div class="col">
		                                <label>Department *</label>
										<input type="text" class="form-control" name="department">
								    </div>
								    <div class="col">
										<label>location *</label>
										<input type="text" class="form-control" name="location">
								    </div> 
	                            </div>
	                            <div class="row">
		                            <div class="col">
		                                <label>Head of department</label>
										<input type="text" class="form-control" name="director">
								    </div>
	                            </div>    
	                            <div class="row add-dep">
		                            <div class="col">
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
								    </div>
									<div class="col">
										<button type="cancel" name="cancel" class="btn btn-primary">Cancel</button> 
									</div>
	                            </div>
							</form>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
	<div class=" footer">
		<p>Copyright &copy 2020rmb</p>
	</div>
</footer>
</html>