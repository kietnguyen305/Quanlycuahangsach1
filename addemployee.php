<?php

	

	if (isset($_POST['submit']) && isset($_POST['id_E'])) {
				require_once('connect.php');
			mysqli_set_charset($conn, 'UTF8');

			$id = $_POST['id_E'];
			$name = $_POST['name_E'];
			$birthday = $_POST['birthday_E'];
			$gender = $_POST['gender_E'];
			$phonenum = $_POST['phonenum_E'];
			$email = $_POST['email_E'];
			$address = $_POST['address_E'];
			$username = $_POST['username_E'];
			$password = $_POST['password_E'];
			$job = $_POST['job_E'];

			$sql = "INSERT INTO employee (id_emp, name_emp, birthday_emp, gender_emp, phonenum, email, address, username, password, role_emp) VALUES(?,?,?,?,?,?,?,?,?,?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssssssssss",$id,$name,$birthday,$gender,$phonenum,$email,$address,$username,$password,$job);
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
				Please <a href="add_employee.php">click here</a> to add more. <br>
				Please <a href="employee_manager.php">click here</a> to end.
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