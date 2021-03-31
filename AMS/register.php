<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>

	<?php require_once "inc/links.php"; ?> 

</head>
<body>
	<div class="container-fluid">
		<header>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 index-head">
					<p id="R">RMB</p><p id="Rw">(Rwanda Mines Petroleum And Gas Board)</p>
	    		    <p id="A">Asset Management System</p>	
				</div>
			</div>
		</header>
		<section>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 reg-body">
					<div class="row">
						<div class="col-lg-2"></div> 
						<div class="col-lg-8 col-md-9 col-sm-9 b">
						<form method="POST" action="actions/register.php" class="">
							<h3><a href="register.php">Registration Form</a></h3>
								<div class="row">
								<div class="col">
									<label>First name *</label>
								    <input type="firstname" name="firstname" class="form-control" placeholder="First name">
								</div>
								<div class="col">
									<label>Second name *</label>
								    <input type="secondname" name="secondname" class="form-control" placeholder="Second name">
								</div>
								<div class="col">
									<label>Date of Birth *</label>
								    <input type="date" name="dateOfBirth" class="form-control" placeholder="">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label>Department *</label>
								    <input type="department" name="department" class="form-control" placeholder="department">
								</div>
								<div class="col">
									<label>Telephone *</label>
								    <input type="telephone" name="telephone" class="form-control" placeholder="+250 7XX XXX XXX">
								</div>
								<div class="col">
									<label>Username *</label>
								    <input type="username" name="username" class="form-control" placeholder="Username">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label>Email *</label>
								    <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
								</div>
								<div class="col">
									<label>Password *</label>
								    <input type="password" name="password" class="form-control" placeholder="Password">
								</div>
							</div>
							  <div class="row">
							  	<div class="col-lg-2"></div>
                            	<div class="col">
                            		<label></label>
	                            	<div class="form-control alert alert-danger js-error"></div>
	                            </div>
							  	<div class="col-lg-2"></div>
                            </div>
							<div class="row">
								<div class="col-lg-2"></div>
                               	<div class="col-lg-4">
									<button type="submit" name="submit" class="btn btn-primary">Register</button>
								</div>
								<div class="col-lg-4">
									<button type="cancel" name="cancel" class="btn btn-primary">Cancel</button> 
								</div>
								<div class="col-lg-2"></div>
                            </div>
						</form>
						</div>
						<div class="col-lg-2"></div> 
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 footer">
					<p>Copyright &copy 2020rmb</p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>