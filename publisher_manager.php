<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>PublisherManagerPage</title>
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
      <div class="col-12">
         <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
        <a type="button"   href="publisher_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhà cung cấp</a>      
      <?php }?>
      </div> 
      
      <div class="col-12"> 
         <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
        <a type="button" href="employee_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhân viên</a>
        <?php }?>
      </div>
       <?php 
            if (isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']== 1) ) {?>
      <div class="col"> 
        <a type="button" href="#" class="btn btn-secondary btn-lg btn-block">Hiển thị thống kê</a>
        <?php }?>
      </div>
    </div>

  </div>
  <div class="col-lg-9 mt-3">
   <h4 class="mb-3">Quản lý nhà cung cấp</h4>
    <table class="table">
      <thead class="thead-dark">
        <tr>
       
          <th scope="col">ID</th>
          <th scope="col">Tên nhà cung cấp</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Email</th>
          <th scope="col">Địa chỉ</th>    
          <th scope="col"></th>         
          
        </tr>
      </thead>
      <tbody>

        <?php
            require_once("connect.php");
            mysqli_set_charset($conn, 'UTF8');
            $sql = "SELECT * FROM publisher";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                ?>

               <tr>
                  <th scope="row"><?= $row['publisherid'] ?></th>
                  <td><?= $row['publisher_name'] ?></td>
                  <td><?= $row['phonenum'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><?= $row['address'] ?></td>
                   <td><a style="color:#FF0000;" href="deletepublisher.php?id=<?= $row['publisherid'] ?>">Xóa nhà cung cấp</a> </td>

                  
                  </tr>

                <?php
              }
            }
          ?>
      
      </tbody>
    </table>
    <a type="button" href="add_publisher.php" class="btn btn-warning">Thêm nhà cung cấp</a>

  </div>
</div>




  </body>
</html>