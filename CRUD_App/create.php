<?php 
include 'conn.php';
if(count($_POST)!=0)
{
	extract($_POST);
	$query="INSERT INTO employee(employee_name,department,Designation,joining_date,salary,mobile_no,email_id) VALUES ('$employee_name','$department','$Designation','$joining_date','$salary','$mobile_no','$email_id')";
	
	$result=mysqli_query($conn,$query);
	if($result==true)
	{
		echo "Record saved successfully";
	}
	else{
		echo "failed";
	}
}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD APP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-10 m-auto">
					<form method="post">
						<div class="card">
						<div class="card-header bg-dark">
							<h1 class="text-center text-white">Insert Details</h1>
						</div>
						<div class="form-group">
							<label for="employee_name">Employee Name</label>
							<input type="text" class="form-control" name="employee_name">
						</div>
						<div class="form-group">
							<label for="department">Department</label>
							<input type="text" class="form-control" name="department">
						</div>
						<div class="form-group">
							<label for="Designation">Designation</label>
							<input type="text" class="form-control" name="Designation">
						</div>
						<div class="form-group">
							<label for="joining_date">Joining Date</label>
							<input type="Date" class="form-control" name="joining_date">
						</div>
						<div class="form-group">
							<label for="salary">Salary</label>
							<input type="text" class="form-control" name="salary">
						</div>
						<div class="form-group">
							<label for="mobile_no">Contact Number</label>
							<input type="text" class="form-control" name="mobile_no">
						</div>
						<div class="form-group">
							<label for="email_id">Email ID</label>
							<input type="email" class="form-control" name="email_id">
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
					</form>
					<h5><a href="show.php"><input type="button" class="btn btn-primary" value="Display Employee"></a></h5>
				</div>
			</div>
		</div> 
	</body>
</html>