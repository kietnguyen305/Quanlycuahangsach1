<?php
@ob_start();
session_start();
require_once('connect.php');
mysqli_set_charset($conn, 'UTF8');

 $sql = "SELECT book_id, book_name, img, book_author, book_price, publisher.publisher_name, category.category_name, amount, pulication_date, content FROM books, publisher, category WHERE books.categoryid = category.categoryid AND books.publisherid = publisher.publisherid AND book_id like ". $_GET['book_id'];
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();

 
?>

<!DOCTYPE html>
<html>
<head>
	<title>BookInformationPage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
	<!-- narbar trên -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
          <a class="navbar-brand" href="index.php">BOOKDREAM</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
            <?php
                if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
                  ?><ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <?php 
                          if (isset($_SESSION['isAdmin'])) {
                            ?>
                            <a class="nav-link" href="book_manager.php"><?=$_SESSION['username']?><span class="sr-only">(current)</span></a><?php
                          }else{ ?>
                            <a class="nav-link" href=""><?=$_SESSION['username']?><span class="sr-only">(current)</span></a><?php
                          }

                        ?>
                            
                  </li>
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>
                    </ul> <?php
              } else{ ?>
                      <ul class="navbar-nav ml-auto">
                          
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Đăng nhập</a>
                          </li>
                      </ul> <?php
                    }
                  ?>
                  
                  <!-- <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="registration.php">Đăng ký<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng nhập</a>
                      </li>
                  </ul> -->
            
              <form class="form-inline" action="search_book.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="text">

            <button class="btn btn-secondary" type="submit" >Tìm kiếm</button>

          </form>
          </div>
    
    </nav>

    <!-- giao diện nội dung -->

<div class="container" id="main">      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="index.php">Books</a> &gt; <?= $row['book_name'] ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="<?= $row['img'] ?>">
        </div>
        <div class="col-md-6">
          <h4>Ghi chú</h4>
          <p><?= $row['content'] ?></p>
          <h4>Book Details</h4>
          <table class="table">
          	<tbody>
          		<tr>
	              <td>ID</td>
	              <td><?= $row['book_id'] ?></td>
          		</tr>
          		<tr>
	              <td>Tên sách</td>
	              <td><?= $row['book_name'] ?></td>
           		</tr>
                <tr>
	              <td>Tác giả</td>
	              <td><?= $row['book_author'] ?></td>
           		</tr>
           		<tr>
	              <td>Thể loại</td>
	              <td><?= $row['category_name'] ?></td>
           		</tr>
                <tr>
	              <td>Giá tiền</td>
	              <td><?= $row['book_price'] ?></td>
                </tr>
                <tr>
	              <td>Nhà cung cấp</td>
	              <td><?= $row['publisher_name'] ?></td>
           		</tr>
           		<tr>
	              <td>Ngày phát hành</td>
	              <td><?= $row['pulication_date'] ?></td>
           		</tr>
               
            </tbody>
           </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookisbn" value="9780575081406">
            
            <input type="submit" value="Add to cart" name="cart" class="btn btn-primary">
          </form>
       	</div>
      </div>
	</div>




</body>
</html>