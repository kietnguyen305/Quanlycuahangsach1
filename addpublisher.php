<?php
	if (isset($_POST['submit'])) {
		
			require_once('connect.php');
			mysqli_set_charset($conn, 'UTF8');
			
			$id= $_POST['id_P'];
			$name = $_POST['name_P'];
			
			$phonenum = $_POST['phonenum_P'];
			$email = $_POST['email_P'];
			$address = $_POST['address_P'];
			


			$sql = "INSERT INTO publisher (publisherid,publisher_name,phonenum,email,address) VALUES(?,?,?,?,?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssss",$id,$name,$phonenum,$email,$address);
			$isOK = $stmt->execute();
		
	}
				

	

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Thêm sách</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  <div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				Product added successfully. <br>
				Please <a href="add_publisher.php">click here</a> to add more. <br>
				Please <a href="publisher_manager.php">click here</a> to end.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to add product.
			</div>
			<?php } ?>
		  </div>
		</div>
	</body>
</html>