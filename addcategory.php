<?php

	

	if (isset($_POST['submit']) && isset($_POST['id_C'])) {
				require_once('connect.php');
			mysqli_set_charset($conn, 'UTF8');

			$id = $_POST['id_C'];
			$name = $_POST['name_C'];
			

			$sql = "INSERT INTO category (categoryid, category_name) VALUES(?,?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ss",$id,$name);
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

		<title>Thêm nhân viên</title>

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
				Please <a href="add_category.php">click here</a> to add more. <br>
				Please <a href="category_manager.php">click here</a> to end.
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