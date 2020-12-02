<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>BookManagerPage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
          <a class="navbar-brand" href="index.php">BOOKDREAM</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
            
                  
                  <ul class=" p-3 navbar-nav ml-auto">
                      
                      <li class="nav-item">
                        <a class="btn btn-danger"  href="logout.php">Đăng xuất</a>
                      </li>


                  </ul>
            
              <form class="form-inline" action="search.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-secondary" type="submit" >Tìm kiếm</button>
              </form>
          </div>
    
  </nav>
    
<div class="row">
  <div class="col-lg-3 mt-5">
    <div class="row">

       <div class="col-12"> 
        <a type="button" href="book_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý sách</a>
      </div>
      
      <div class="col-12">
        <a type="button" href="category_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý thể loại</a>
      </div>
       <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
      <div class="col-12">
        
        <a type="button"   href="publisher_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhà cung cấp</a>      
     
      </div> 
       <?php }?>
       <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
      <div class="col-12"> 
        
        <a type="button" href="employee_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhân viên</a>
        
      </div>
      <?php }?>
       <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
      <div class="col-12"> 
        <a type="button" href="#" class="btn btn-secondary btn-lg btn-block">Hiển thị thống kê</a>
       
      </div>
       <?php }?>
    </div>

  </div>
  <div class="col-lg-9 mt-3">
     <h4 class="mb-3">Quản lý sách</h4>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Hình ảnh</th>    
          <th scope="col">ID</th>
          <th scope="col">Tên sách</th>
          <th scope="col">Tác giả</th>
          <th scope="col">Giá tiền</th>
          <th scope="col">Nhà cung cấp</th>
          <th scope="col">Thể loại</th>          
          <th scope="col">Số lượng</th>
          <th scope="col">Ngày phát hành</th>
          <th scope="col"></th>
          <th scope="col"></th>
         
          
        </tr>
      </thead>
      <tbody>

        <?php
            require_once("connect.php");
            mysqli_set_charset($conn, 'UTF8');
            $sql = "SELECT book_id, book_name, img, book_author, book_price, publisher.publisher_name, category.category_name, amount, pulication_date, content FROM books, publisher, category WHERE books.categoryid = category.categoryid AND books.publisherid = publisher.publisherid ORDER by book_id ASC;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                ?>

               <tr>
                  <td><a><img src="<?= $row['img'] ?>" alt ="img" style="max-height: 80px; max-width: 80px;"></a></td>
                  <th scope="row"><?= $row['book_id'] ?></th>
                  
                  <td><?= $row['book_name'] ?></td>
                  <td><?= $row['book_author'] ?></td>
                  <td><?= $row['book_price'] ?></td>
                  <td><?= $row['publisher_name'] ?></td>
                  <td><?= $row['category_name'] ?></td>
                  <td><?= $row['amount'] ?></td>
                  <td><?= $row['pulication_date'] ?></td>
                  <td><a href="edit_book.php?id=<?= $row['book_id'] ?>">Chỉnh sửa</a> </td>
                  <td><a style="color:#FF0000;" href="deletebook.php?id=<?= $row['book_id'] ?>">Xóa sách</a> </td>
                  



                  </tr>

                <?php
              }
            }
          ?>
        
       
      </tbody>
    </table>
    <a type="button" href="add_book.php" class="btn btn-warning">Thêm sách</a>

  </div>
</div>


          


  </body>
</html>