<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div col-lg-15>
					<table class="table">
					  <thead class="table-dark">
					    <tr>
					      <th scope="col">employee_id</th>
					      <th scope="col">employee_name</th>
					      <th scope="col">department</th>
					      <th scope="col">Designation</th>
					      <th scope="col">joining_date</th>
					      <th scope="col">salary</th>
					      <th scope="col">mobile_no</th>
					      <th scope="col">email_id</th>
					      <th scope="col">Update</th>
					      <th scope="col">Delete</th>
					    </tr>
					  </thead>
					  <?php
					  include 'conn.php';
					  $query="SELECT * FROM employee";
					  $result=mysqli_query($conn,$query);
					  while($res=mysqli_fetch_array($result)){
					  ?>
					  <tbody>
					    <tr>
					      <td><?php echo $res['employee_id'] ?></td>
					      <td><?php echo $res['employee_name'] ?></td>
					      <td><?php echo $res['department'] ?></td>
					      <td><?php echo $res['Designation'] ?></td>
					      <td><?php echo $res['joining_date'] ?></td>
					      <td><?php echo $res['salary'] ?></td>
					      <td><?php echo $res['mobile_no'] ?></td>
					      <td><?php echo $res['email_id'] ?></td>
					      <td><a href="update.php?id=<?php echo $res['employee_id']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
					      <td><a href="delete.php?id=<?php echo $res['employee_id']?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
					    </tr>
					  </tbody>
					<?php } ?>
					</table>
		</div>
	</div>
</div>
</body>
</html>