<?php include 'headerLogged.php'; ?><!--need to add new header with logout btn-->
<style>
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #337ab7;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	

.modal-testmodal {
  position: absolute;
  top: 15rem;
  right: 100px;
  bottom: 0;
  left: 0;
  z-index: 10040;
  overflow: auto;
  overflow-y: auto;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>    
<section id="adminloginpage" class="container-fluid">
<div class="container">
    <div class="row" style="margin-top:1rem;">
    <div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Student Login Management dashboard</b></h2>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-1">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:15rem;">
						</div>
						<a href="#importModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span>Import</span></a>
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i> <span>Add New Student</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i><span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Index No</th>
						<th>Name</th>
						<th>Grade</th>
						<th>Username</th>
						<th>Password</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>10105</td>
						<td>Sachini Uththara</td>
						<td>6 - B</td>
						<td>sachini</td>
						<td>Sachini@#123</td>
						<td><span class="label label-success flex">Active</span></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-hand-o-up" aria-hidden="true"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>4526</td>
						<td>Ranmini Dasanayaka</td>
						<td>1 - A</td>
						<td>ranmini</td>
						<td>Ranmini@#123</td>
						<td><span class="label label-success flex">Active</span></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-hand-o-up" aria-hidden="true"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>

					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>4528</td>
						<td>Yeshani Dasanayaka</td>
						<td>1 - B</td>
						<td>Yeshani</td>
						<td>Yeshani@#123</td>
						<td><span class="label label-success flex">Active</span></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-hand-o-up" aria-hidden="true"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade modal-testmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Student</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Index No:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Name:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Grade:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Username:</label>
						<input type="text" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Password:</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade modal-testmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Studnt</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Index No:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Name:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Grade:</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Username:</label>
						<input type="text" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Password:</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade modal-testmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Student</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- import modal -->
<div id="importModal" class="modal fade modal-testmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Import Student Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<form enctype="multipart/form-data" method="post" role="form">
						<div class="form-group">
						<label for="exampleInputFile">File Upload</label>
						<input type="file" name="file" id="file" size="150">
						<p class="help-block">Only Excel/CSV File Import.</p>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-warning" value="Import">
				</div>
			</form>
		</div>
	</div>
</div>
    </div>
</div>
</section>
        
<?php include 'footer.php'; ?>