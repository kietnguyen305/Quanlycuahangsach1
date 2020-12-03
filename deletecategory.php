<?php
	$categoryid = $_GET['id'];
	require_once("connect.php");
	mysqli_set_charset($conn, 'UTF8');
	$sql = "DELETE FROM category Where categoryid like '".$categoryid."'";
	$result = $conn->query($sql);
	header("Location: category_manager.php")
?>