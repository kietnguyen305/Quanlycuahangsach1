<?php
	$book_id = $_GET['id'];
	require_once("connect.php");
	mysqli_set_charset($conn, 'UTF8');
	$sql = "DELETE FROM books Where book_id like '".$book_id."'";
	$result = $conn->query($sql);
	header("Location: book_manager.php")
?>