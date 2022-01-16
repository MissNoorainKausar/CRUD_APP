<?php
include 'conn.php';
extract($_GET);
$query="DELETE FROM EMPLOYEE WHERE employee_id='$id'";
mysqli_query($conn,$query);

header('location:show.php');

?>


