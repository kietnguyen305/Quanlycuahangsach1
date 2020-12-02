<?php
	$emp_id = $_GET['id'];
	require_once("connect.php");
	mysqli_set_charset($conn, 'UTF8');
	$sql = "DELETE FROM employee Where id_emp like '".$emp_id."'";
	$result = $conn->query($sql);
	header("Location: employee_manager.php")
?>