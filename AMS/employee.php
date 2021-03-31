<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
    <meta name="description" content="Asset management system">
	<meta name="keywords" content="Asset management online system">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Employee Pages</title>

	<?php require_once "inc/links.php"; ?> 
	<?php require_once "departSelect.php"; ?>
</head>

<script>
	$(document).ready(function(){
		$('.editbtn').on('click', function(){
			$('#editmodal').modal('show');


				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#update_id').val(data[0]);
				$('#fullname').val(data[1]);
				$('#email').val(data[2]);
				$('#contact').val(data[3]);
				$('#department').val(data[4]);
				$('#addedt').val(data[5])

		});

		$('#department').mousedown(function(){
			$(this).hide();
			$('#departmen').show();
		});
	});
</script>

<script>

			//js codes for select from database
		function my_fun(str){
	        if(window.XMLHttpRequest){
	            xmlhttp = new XMLHttpRequest();
	        }else{
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange= function(){
	        	if(this.readyState == 4 && this.status==200){
	        		
	                	document.getElementById('abc').innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET","inc/getDepName_DepID.php?value="+str, true);
	        xmlhttp.send();
    	}
	//js codes for add dynamic rows
     	var Add = 0;
     	
		function addn(){
			    Add ++;
			var html = "<tr>";
			    html +="<td>" + Add + "</td>";
				html +="<td><input class='form-control' name='fullname[]'></td>"; 
				html +="<td><input class='form-control' name='email[]'></td>"; 
				html +="<td><input class='form-control' name='contact[]'></td>"; 
		
				html +="<td><select class='form-control' style='height:px;' onchange='my_fun(this.value);'><option>Choose department</option> <?php				
								if($result){
									while($row=mysqli_fetch_array($result)){ 
									$stdepart = $row["$colname"];
									echo "<option> $stdepart <br> </option>";
									}
								} 
							?>
						</select></td>";
				html +="<td><select id='abc' name='depart_id' style='display:none'><option>Selected ID</option></select></td>";
				/*html +="<td><button name='remove' id='' class='btn btn-danger btn_remove' style='height:25px'>X</button></td>"	*/	

			html += "</tr>";

			document.getElementById("tbody").insertRow().innerHTML = html;
			$('#tete').css('color','white');
        } 
	</script>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
<!--########################################### EDIT POP UP FORM ########################################### -->
				<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Update Employee data</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="updatecode.php" method="POST">
								<div class="modal-body">
									<input type="text" name="update_id" id="update_id">
									<div class="form-group">
										<label>fullname</label>
										<input type="text" name="fullname" id="fullname" class="form-control">
									</div>
									<div class="form-group">
										<label>email</label>
										<input type="text" name="email" id="email" class="form-control">
									</div>
									<div class="form-group">
										<label>contact</label>
										<input type="text" name="contact" id="contact" class="form-control">
									</div>
									<div class="form-group">
										<label>department</label>
										<input class='form-control' type="text" id="department">
										<select class='form-control' id="departmen" style='display: none;' onchange='my_fun(this.value);'><option>Choose department</option> <?php				
												if($result){
													while($row=mysqli_fetch_array($result)){ 
													$stdepart = $row["$colname"];
													echo "<option> $stdepart <br> </option>";
													}
												} 
											?>
										</select>
									</div>
									<div class="form-group">
										<input type="text" id="depart_i" name="depart_i">
										<select name='depart_id' id='depart_id'><option>Selected ID</option></select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" name="Updatedata" class="btn btn-primary">Save Data</button>
								</div>
							</form>
						</div>
					</div>
					</div>

<!--#################################################################################################-->

			</div>
		</div>
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
						<a href="employee.php"><h3>employee</h3></a>
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
						    <li class="active"><a href="#"><i class="far fa-address-book"></i><span>Employee list</span></a></li>
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
								<th class="emp">N<sup>o</sup></th>
								<th>Fullname</th>
								<th>Email</th>
								<th>Contact</th>
								<th>Department</th>
				<!--				<th>Items assigned</th> -->
							    <th style="text-align: center;">Action</th>  
							</tr>
								<?php  include "inc/disp_emp.php" ?>	
						</table>
					</div>	
				</div>

				<div class="row add">
						<form method="POST" action="actions/emp.php">
							<div class="col-lg-12 col-md-12 col-sm-12 add_emp">
								<table id="tete">
									<tr>
										<th>N<sup>0</sup> </th>
										<th>Fullname</th>
										<th>Email</th>
										<th>Contact</th>
										<th>Department</th>
									</tr>
										<tbody id="tbody"></tbody> 
								</table>
								<div class="col">
									<button type="button" class="btn btn-primary new" onclick="addn();">Add New</button>
								</div>
								<div class="col">
									<button type="submit" name="save" class="btn btn-primary save-new" >Submit</button>
									<button type="cancel" name="cancel_new" class="btn btn-primary save-new">Cancel</button>
								</div>
								
							</div>
						</form>
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