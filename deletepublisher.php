<?php
	$publisher_id = $_GET['id'];
	require_once("connect.php");
	mysqli_set_charset($conn, 'UTF8');
	$sql = "DELETE FROM publisher Where publisherid like '".$publisher_id."'";
	$result = $conn->query($sql);
	header("Location: publisher_manager.php")
?>