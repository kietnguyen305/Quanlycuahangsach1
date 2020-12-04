<?php
@ob_start();
session_start();
?>

<?php
    require_once('connect.php');
    mysqli_set_charset($conn, 'UTF8');
   
?> 


<!DOCTYPE html>
<html>
<head>
  <title>AddBookPage</title>
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
            
             <form class="form-inline" action="search_book.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="text">

            <button class="btn btn-secondary" type="submit" >Tìm kiếm</button>

          </form>
          </div>
          
    
    </nav>
    <div class="container">
      <div class="order-md-1">
          <h4 class="mb-3">Thêm sách</h4>
          <form class="needs-validation" action="addbook.php" method="POST" enctype="multipart/form-data" novalidate="">
            
              <!-- <div class="mb-3">                
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div> -->
              <div class="mb-3">
                <label for="Name">Tên sách</label>
                <input type="text" class="form-control" id="Name" name="book_name" placeholder="" value="" required="">
                
              </div>
            

           
           

            <div class="mb-3">
              <label for="author">Tác giả <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="book_author" id="author" >
              <div class="invalid-feedback">
                
              </div>
            </div>



              

           



            <div class="mb-3">
              <label for="category">Thể loại</label>
              <?php 

              $sql ="SELECT * FROM category";
              $result = $conn->query($sql);
              

              if ($result->num_rows > 0) { 
                while ($row = $result->fetch_assoc()) { ?>

                <div class="form">
                  <label><input type="radio" name="book_category" value="<?= $row['categoryid'] ?>"><?= $row['category_name'] ?></label>
                </div>
               <?php }
              }

               ?>
            </div>

             <div class="mb-3">
              <label for="price">Giá tiền <span class="text-muted"></span></label>
              <input type="number" class="form-control" name="book_price" id="price" value="">
              <div class="invalid-feedback">
                
              </div>
            </div>

              <div class="mb-3">
              <label for="publisher">Nhà cung cấp</label>
              <select name="book_publisher" class="browser-default custom-select">
              <?php 

              $sql1 ="SELECT * FROM publisher";
              $result1 = $conn->query($sql1);
              

              if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) { ?>

                  
                    
                    <option value="<?= $row1['publisherid'] ?>"><?= $row1['publisher_name'] ?></option>
                    
                
                  
               <?php }
              }

               ?>
                 </select>
            </div>
             
             <!-- <div class="mb-3">
              <label for="publisher">Nhà cung cấp <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="book_publisher" id="publisher" >
              <div class="invalid-feedback">
                
              </div>
            </div> -->
             <div class="mb-3">
              <label for="count">Số lượng <span class="text-muted"></span></label>
              <input type="number" class="form-control" name="amount" id="count" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="day">Ngày phát hành <span class="text-muted"></span></label>
              <input type="date" class="form-control"  name = "pulication_date" id="day" placeholder="yyyy/mm/dd" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="form-group">
                <label for="exampleFormControlTextarea1">Ghi chú</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name = "content" rows="3"></textarea>
              </div>
            <div class="mb-3">
              <label for="fileUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>

          
            <hr class="mb-4">
            <button type="submit" name="submit" class="btn btn-primary btn-lg mb-4">Thêm sách</button>
            <a type="button" href="book_manager.php" class="btn btn-secondary btn-lg mb-4">Cancel</a>

              
          </form>
        </div>
      </div>





  </body>
</html>