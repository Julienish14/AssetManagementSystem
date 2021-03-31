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
	//SHOW DATA js
	$(document).ready(function(){
		$('.showdata').on('click', function(){
			$('#showdatamodal').modal('show');


				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#update_id').val(data[0]);
				$('#showname').val(data[1]);
				$('#showem').val(data[2]);
				$('#showcont').val(data[3]);
				$('#showdep').val(data[4]);
				$('#showtime').val(data[5])
				$('#showite').val(data[6]);
				

		});
	});
</script>

<script>

	//DELETE DATA js
	$(document).ready(function(){
		$('.deletebtn').on('click', function(){
			$('#deletemodal').modal('show');


				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#delete_id').val(data[0]);
		});
	});
</script>

<script>
	//EDIT DATA js
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
				$('#item').val(data[6]);
				$('#depaID').val(data[7]);

		});

		$('#department').mousedown(function(){
			$(this).hide();
			$('#departmen').show();
		});
	});
</script>


<script>
	function my_fon(str){
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange= function(){
				if(this.readyState == 4 && this.status==200){
					
					document.getElementById('departId').innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET","inc/getDepName_DepID.php?value="+str, true);
			xmlhttp.send();
		}
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
									$std = $row["$coname"];
									echo "<option> $std <br> </option>";
									}
								} 
							?>
						</select></td>";
				html +="<td><select name='depart_id[]' id='abc'><option>Selected ID</option></select></td>";
				html +="<td><button name='remove' id='' class='btn btn-danger btn_remove' style='height:25px'>X</button></td>"		

			html += "</tr>";

			document.getElementById("tbody").insertRow().innerHTML = html;
			$('#tete').css('color','white');
        } 
	</script>
<body>
	<div class="container-fluid">
<!--#################################### SHOW POP UP FORM ########################################## -->
<div class="modal fade" id="showdatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Employee view</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="foform">
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<label>fullname</label>
							<input type="text" id="showname" class="form-control">
						</div>
						<div class="col">
							<label>email</label>
							<input type="text" id="showem" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label>contact</label>
							<input type="text" id="showcont" class="form-control">
						</div>
						<div class="col">
							<label>department</label>
							<input class='form-control' type="text" id="showdep">
						</div>
					</div>
					<div class="row">	
						<div class="col">
							<label>assigned Items</label>
							<input class='form-control' type="text" id="showite">
						</div>
						<div class="col">
							<label>added time</label>
							<input class='form-control' type="text" id="showtime">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>

<!--#########################################################################################################-->		
<!--############################################## DELETE POP UP FORM #######################################-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Delete Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="actions/deletecode.php" method="POST">
				<div class="modal-body">
					<input type="hidden" name="delete_id" id="delete_id">

					<h4>Do you want to delete this employee?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
					<button type="submit" name="deletedata" class="btn btn-primary">YES</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--#########################################################################################################-->

<!--########################################### EDIT POP UP FORM ########################################### -->
				<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog  modal-lg" role="document">
						<div class="modal-content ">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Update Employee data</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="foform">
								<form action="actions/updatecode.php" method="POST">
								<div class="modal-body">
									<input type="hidden" name="update_id" id="update_id">
									<div class="row">
										<div class="col">
											<label>fullname</label>
											<input type="text" name="fullname" id="fullname" class="form-control">
										</div>
										<div class="col">
											<label>email</label>
											<input type="text" name="email" id="email" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col">
											<label>contact</label>
											<input type="text" name="contact" id="contact" class="form-control">
										</div>
										<div class="col">
											<label>department</label>
											<input class='form-control' type="text" id="department">
											<select class='form-control' id="departmen" style="display: none;" onchange='my_fon(this.value);'><option>Choose department</option> <?php				
													if($result){
														while($row=mysqli_fetch_array($result)){ 
														$stdepart = $row["$colname"];
														echo "<option> $stdepart <br> </option>";
														}
													} 
												?>
											</select>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col">
											<label>Assigned Items</label>
											<input class="form-control" type="text" id="item" >
										</div>
										<div class="col-lg-3"></div>
									</div>
									<div class="row" style="display: non;">
										<div class="col">
											<input class="form-control" type="text" id="depaID" name="depart_i">
										</div>
										<div class="col">	
											<select class="form-control" name='depart_id' id='departId'><option>Selected ID</option></select>
										</div>
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
					</div>

<!--#################################################################################################-->
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
			<?php 
				$con = mysqli_connect('localhost', 'julien', 'Juxjulien14', 'ams') or die('Not connected');

				$sel = "SELECT employee.ID, employee.fullname, employee.email, employee.telephone, employee.depart_id, employee.added_time,department.department_name, item.item_name FROM employee, department,item WHERE department.ID = employee.depart_id and item.ID = employee.item_id ";

				$result = mysqli_query($con, $sel);
			?>
			<table class="table-hover">
				<thead>
					<tr>
						<th >ID</th>
						<th>fullname</th>
						<th>email</th>	
						<th>contact</th>
						<th>department</th>
			<!--		<th>added time</th> 
						<th>item name</th -->
						<th style="text-align: center;">actions</th>	
					</tr>
				</thead>

				<?php 

					if($result){
						foreach ($result as $row) {			
				?>
				<tbody>
					<tr>
						<td class="showdata"> <?php echo $row['ID']; ?> </td>
						<td class="showdata"> <?php echo $row['fullname']; ?> </td>
						<td class="showdata"> <?php echo $row['email']; ?> </td>
						<td class="showdata"> <?php echo $row['telephone']; ?> </td>
						<td class="showdata"> <?php echo $row['department_name']; ?> </td>
						<td class="showdata" style="display: none;"> <?php echo $row['added_time']; ?> </td>
						<td class="showdata" style="display: none;"> <?php echo $row['item_name']; ?> </td>
						<td class="showdata" style="display: none;"> <?php echo $row['depart_id']; ?> </td>

						<td>
						<i type="button"  class="fas fa-edit btn btn-success editbtn"></i> 
							<i type="button"  class="fas fa-trash btn btn-danger deletebtn"></i> 
						</td>
					</tr>
				</tbody>
				<?php 
					}
				}else{
					echo "No record data";
				}
				?>
			</table>	
		</div>	
	</div>

				<div class="row add">
						<form method="POST" action="actions/emp.php">
							<div class="col-lg-12 col-md-12 col-sm-12 add_emp">
								<table id="tete">
									<tr>
										<th>N<sup>0</sup> </th>
										<th>fullname</th>
										<th>email</th>
										<th>contact</th>
										<th>department</th>
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