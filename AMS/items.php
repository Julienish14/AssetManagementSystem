<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="follow">
    <meta name="description" content="Asset management system">
	<meta name="keywords" content="Asset management online system">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Items Pages</title>

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
			<div class="col-lg-9 col-md-9 col-sm-9  main_asset">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 head">
						<a href="items.php"><h3>items</h3></a>
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
						    <li class="active"><a href="#"><i class="far fa-address-book"></i>
						    	<span>Item list</span></a></li>
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
								<th>Item Number</th>
								<th>Item Name</th>
								<th>type</th>
								<th>Added time</th>
								<th style="text-align: center;">action</th>
								<!--<th>serialNumber</th>
									<th>status</th>
									<th>option</th> -->
							</tr>
								<?php require_once "inc/disp_itm.php" ?>
						</table>
					</div>
				</div>		
				<div class="row add">
					<form method="POST" action="actions/itm.php" name="add_name" id="add_name">
						<div class="col-lg-12 col-md-12 col-sm-12 add_item">
							<table id="dynamic_field">
								<tr>
									<th>N<sup>0</sup> </th>
									<th>Item Number</th>
									<th>Item name</th>
									<th>Category</th>
									<th>Op status</th>
								</tr>
							</table>
						</div>
						<div class="col">
							<button type="button" name="add" id="add" class="btn btn-primary newa">Add More</button>
						</div>
						<div class="col">
							<button type="submit" name="save" class="btn btn-primary save-new" >Submit</button>
							<button type="cancel" name="cancel_new" class="btn btn-primary save-new">Cancel</button>
						</div>
					</form>
				</div>	
				</div>
			</div>
		</div>	
	</div>
	<script>
    /*    var Add = 0;
        function addn(){
	        Add ++;
	        var html = "<tr>";
	        html +="<td>" + Add + "</td>";
	            html +="<td><input name='item_codenumb[]'></td>"; 
	            html +="<td><input name='item_name[]'></td>"; 
	            html +="<td><input name='category[]'></td>";
	            html +="<td><select name='operation_status[]' style='height:30px'><option>Working</option> <option>Not Working</option></select></td>";
	           html +="<td><input style='width:90px;display:none' value='Unassigned' name='current_status[]'></td>";
	           html +="<td><input id="'+Add+'" type='button' value = 'Remove'> </td>";

	        /*    html +="<td><select style='height:30px;width:100px;display:none;' name='current_status[]'><option>Assigned</option> <option>Unsigned</option></select></td>";  

	        html +="</tr>";
	        document.getElementById("tbody").insertRow().innerHTML = html;
				$('.tete').css('color','white');
				$('#remove').click(function(){
					$(this).remove();
				});
        } */

    $(document).ready(function(){
		var i = 0;
		$('#add').click(function(){
			i++;
			$('#dynamic_field').append('<tr id="row'+i+'" > <td>'+i+'</td> <td><input type="text" name="item_codenumb[]"  placeholder="enter item number" class="form-control" style="height:35px"></td> <td><input type="text" name="item_name[]"  placeholder="item name" class="form-control" style="height:35px"></td> <td><input type="text" name="category[]"  placeholder="item category" class="form-control" style="height:35px"></td> <td><select type="text" name="operation_status[]" class="form-control" style="height:35px;padding-top:px"><option>Working</option><option>Not Working</option></select></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="height:35px;">remove</button></td> <td><input type="text" name="current_status[]" id="name" value="Unassigned" class="form-control" style="display:none;height:35px"></td> </tr>');
			$('#dynamic_field').css('color','white');
		});
		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id");
			$("#row"+button_id+"").remove();
		});
	});	
	</script>
</body>
<footer>
		<div class="footer">
			<p>Copyright &copy 2020rmb</p>
		</div>
</footer>
</html>