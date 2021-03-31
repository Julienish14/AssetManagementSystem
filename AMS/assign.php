<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
    <meta name="description" content="Asset management system">
	<meta name="keywords" content="Asset management online system">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Assign items</title>
	
	<?php require_once "inc/links.php"; ?>
	<?php require_once "assignSel.php" ?> 

</head>
<script>
	function my_fun(str){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function(){
            if(this.readyState == 4 && this.status==200){
                document.getElementById('poll').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","inc/helper.php?value="+str, true);
        xmlhttp.send();
    }
    	function my_fan(str){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function(){
            if(this.readyState == 4 && this.status==200){
                document.getElementById('getIt').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","inc/helpe.php?value="+str, true);
        xmlhttp.send();
    }
    	function depemp(str){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function(){
            if(this.readyState == 4 && this.status==200){
                document.getElementById('abcd').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","inc/getDepart_EmpName.php?value="+str, true);
        xmlhttp.send();
    }
    	function empid(str){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function(){
            if(this.readyState == 4 && this.status==200){
                document.getElementById('abcde').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","inc/getEmp_nameID.php?value="+str, true);
        xmlhttp.send();
    }
</script>
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
						<a href="assign.php"><h3>assign<span>items</span></h3></a>
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
				    <div class="col-lg-12 mid">
					   <nav>
						  <ul>
						    <li class="active"><a href="#"><i class="far fa-address-book"></i><span>Assigned list</span></a></li>
							<li class="addn"><a href="#">(+)Assign new</a></li>
						    <li><a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a></li>
							</ul>
			     	    </nav>  
					</div>
				</div> 
				<div class="row add">
					<div class="col assign">
						<form method="POST" action="actions/assignItem.php">
						    <div class="row">
								<div class="col">
								    <label>Department</label>
								    <select class="form-control" name="depart" onchange="depemp(this.value)">
										<option>Choose department!</option>
										<?php				
											if($result){
												while($row=mysqli_fetch_array($result)){
												$stdepart = $row["$colname"];
										   		echo "<option> $stdepart <br> </option>";
												}
											} 
											?>   
									</select>
									<input type="datetime" value="<?php echo date("Y-m-d H:i:s"); ?> " name="datet" class="form-control" style="display: none;">
								</div>
								<div class="col">
								    <label>Employee name</label>
								    <select class="form-control" onchange="empid(this.value)" name="emp_name" id="abcd">
										<option></option> 
									</select>
									<select name="emp_id" class="form-control" id="abcde" style="display: none;">
										<option>employee ID</option> 
									</select>
								</div>
							</div>
                            <div class="row">
                                <div class="col">
                                  	<label>Item name</label>
								    <select name="item_name" class="form-control" id="SelectA" onchange="my_fun(this.value);">
										<option>Choose item name!</option>
											<?php				
												if($result2){
													while($row=mysqli_fetch_array($result2)){
													$itmMe = $row["$itm_col"];
										   			echo "<option> $itmMe <br> </option>";
													}
												} 
											?>   	
									</select>
								</div>
								<div class="col">
									<label>Item number</label>
								   	<div>
									    <select name="item_number" class="form-control" id="poll" onchange="my_fan(this.value);">
											<option></option>
										</select>
								   	</div>
								</div>
                            </div>
                            <div class="row">
	                            <div class="col-lg-3 col-md-3 col-sm-3">
									<input type="text" name="assign" value="Assigned" class="form-control" style="display: none;">
								</div> 
								<div class="col-lg-3 col-md-3">
									<select id="getIt" name="item_id" class="form-control" style="display: none;">
										<option value="">selected id</option>
									</select>
								</div> 
								<div class="col-lg-3 col-md-3"> 
	                                  	<!-- 	<label></label> -->
								    <button type="submit" name="update" class="btn btn-primary">Submit</button> 
								</div>
								<div class="col-lg-3 col-md-3"> 
									<!--	<label></label> -->
								    <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>
								</div>
                            </div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 content">
						<table class="col-lg-12 col-md-12 col-sm-12 tab">
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
</body>
<footer>
	<div class="row">
		<div class="col-lg-12 footer">
			<p>Copyright &copy 2020rmb</p>
		</div>
	</div>
</footer>
</html>