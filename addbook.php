<?php
	if (isset($_POST['submit'])) {
		if(isset($_POST['book_name']) && isset($_FILES['fileUpload'])){
			require_once('connect.php');
			mysqli_set_charset($conn, 'UTF8');
			
			$name = $_POST['book_name'];
			$target = "img/".$_FILES['fileUpload']['name'];
			move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target);
			$author = $_POST['book_author'];
			$price = $_POST['book_price'];
			$publisher = $_POST['book_publisher'];
			$amount = $_POST['amount'];
			$category = $_POST['book_category'];
			$date = $_POST['pulication_date'];
			$content = $_POST['content'];
	
			


			$sql = "INSERT INTO books (book_name, img, book_author, book_price, publisherid, categoryid, amount, pulication_date, content) VALUES(?,?,?,?,?,?,?,?,?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssssssss",$name,$target,$author,$price,$publisher,$amount,$category,$date,$content);
			$isOK = $stmt->execute();
		}
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
				Please <a href="add_book.php">click here</a> to add more. <br>
				Please <a href="book_manager.php">click here</a> to end.
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