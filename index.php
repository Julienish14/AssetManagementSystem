<?php
/*setcookie("COOK","Here on Our website we use Cookies You have to accept it",time()+60*5);
echo $_COOKIE['COOK'];*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>index page</title>

	<script type="text/javascript" src="AMS/assets/jquery-3.5.1.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="AMS/assets/style.css">
	<link rel="stylesheet" type="text/css" href="AMS/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="AMS/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="AMS/fontawesome/fontawesome-free-5.13.1-web/css/all.min.css">

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
				<div class="col-lg-12 col-md-12 col-sm-12 index-body">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"></div>
					<div class="col-lg-4 col-md-6 col-sm-9 c">
					    <form method="POST" action="AMS/actions/login.php">
					    	<div class="login-box">
								<h1>Login</h1>
								<div class="col textbox">
					    			<i class="fa fa-user icon" aria-hidden = "true"></i> 
									<input type="text" placeholder="email or usename" name="email">
								</div>
								<div class="col textbox">
					    			<i class="fa fa-lock icon" aria-hidden = "true"></i>
									<input type="password" id="pwd" placeholder="password" name="password">
					    			<i class="fa fa-eye" id="eye"></i>
								</div>
					    			<button type="submit" name="login" class="btn btn-block">Sign in</button>
							</div>
							<div class="row links">
					    		<div class="col-lg-9 col-md-9 col-sm-6">
					    			<a href="#" class="forget">Forget password</a>
					    		</div>
					    		<div class="col">
					    			<a href="AMS/register.php" class="reg">Register</a>
					    		</div>
					    	</div>
					    </form>	
					</div>
					<div class="col-lg-4"></div>
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
<script>
	var pwd = document.getElementById('pwd');
    var eye = document.getElementById('eye');

    eye.addEventListener('click',togglePass);

    function togglePass(){
        eye.classList.toggle('active');

        (pwd.type == 'password') ? pwd.type = 'text' :
        pwd.type = 'password';
    }
</script>	
</body>
</html>