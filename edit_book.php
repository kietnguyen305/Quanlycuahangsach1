<?php
@ob_start();
session_start();
?>
<?php
    require_once('connect.php');
    mysqli_set_charset($conn, 'UTF8');
    $id = $_GET['id'];
    $sql ="SELECT * FROM books WHERE book_id like '".$id."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?> 
<!DOCTYPE html>
<html>
<head>
  <title>EditBookPage</title>
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
    <div class="container">
      <div class="order-md-1">
          <h4 class="mb-3">Chỉnh sửa thông tin sách</h4>
          <form class="needs-validation" novalidate="" method="post" action="">
            <div class="row">
              
              <div class="col mb-3">
                <label for="name">Tên sách</label>
                <input type="text" class="form-control" name="name_B" id="name" placeholder="" value="<?= $row['book_name'] ?>" required="">
                <div class="invalid-feedback">
                  
                </div>
              </div>
            </div>

             <div class="mb-3">
              <label for="author">Tác giả <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="author_B" id="author" value="<?= $row['book_author'] ?>">
              <div class="invalid-feedback">                
              </div>
            </div>

             <div class="mb-3">
              <label for="category">Thể loại</label>
              <?php 

              $sql2 ="SELECT * FROM category";
              $result2 = $conn->query($sql2);
             

              if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) { ?>

                <div class="form">
                  <label><input <?php if ($row2['categoryid'] ==  $row['categoryid']) { ?> checked <?php
                   
                  } ?> type="radio" name="category_B" value="<?= $row2['categoryid'] ?>"><?= $row2['category_name'] ?></label>
                </div>
               <?php }
              }

               ?>
            </div>

          <!--   <div class="mb-3">
              <label for="category">Thể loại</label>
              <div class="input-group">
                <input type="text" class="form-control" name ="category_B" id="category" value="<?= $row['categoryid'] ?>" required="">
                
              </div>
            </div> -->

            <div class="mb-3">
              <label for="price">Giá tiền <span class="text-muted"></span></label>
              <input type="number" class="form-control" name="price_B" id="price" value="<?= $row['book_price'] ?>">
              <div class="invalid-feedback">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="publisher">Nhà cung cấp</label>
              <select name="publisher_B" class="browser-default custom-select">
              <?php 

              $sql1 ="SELECT * FROM publisher";
              $result1 = $conn->query($sql1);
              $row1 = $result1->fetch_assoc();

              if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) { ?>

                  
                    
                    <option <?php if ($row1['publisherid'] == $row['publisherid']) { ?> selected <?php
                      
                    } ?> value="<?= $row1['publisherid'] ?>"><?= $row1['publisher_name'] ?></option>
                    
                
                  
               <?php }
              }

               ?>
                 </select>
            </div>
            
           <!--   <div class="mb-3">
              <label for="publisher">Nhà cung cấp <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="publisher_B" id="publisher" value="<?= $row['publisherid'] ?>">
              <div class="invalid-feedback">
                
              </div>
            </div> -->

             <div class="mb-3">
              <label for="amount">Số lượng <span class="text-muted"></span></label>
              <input type="number" class="form-control" name="amount_B" id="amount" value="<?= $row['amount'] ?>" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="date">Ngày phát hành <span class="text-muted"></span></label>
              <input type="date" class="form-control" name="date_B" id="date" placeholder="dd/mm/yyyy" value="<?= $row['pulication_date'] ?>">
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="form-group">
                <label for="exampleFormControlTextarea1">Ghi chú</label>
                <textarea class="form-control" name="content_B" id="exampleFormControlTextarea1" rows="3"><?=$row['content']?></textarea>
              </div>


              <?php 
              if (isset($_POST['name_B'])) {
                if(isset($_POST['name_B']) && isset($_POST['author_B']) && isset($_POST['category_B']) && isset($_POST['price_B'])  && isset($_POST['publisher_B'])  && isset($_POST['amount_B'])  && isset($_POST['date_B']) && isset($_POST['content_B']) ){
                  
                  if ($_POST['name_B'] != "" && $_POST['author_B'] != "" && $_POST['category_B'] != "" && $_POST['price_B'] != "" && $_POST['publisher_B'] != "" && $_POST['amount_B'] != "" && $_POST['date_B'] != "") {
                    $sql1 = "UPDATE books SET book_name = '".$_POST['name_B']."',book_author = '".$_POST['author_B']."',categoryid = '".$_POST['category_B']."',book_price = '".$_POST['price_B']."',publisherid ='".$_POST['publisher_B']."',amount ='".$_POST['amount_B']."',pulication_date='".$_POST['date_B']."',content = '".$_POST['content_B']."'WHERE book_id like'". $_GET['id']."'";
                    $result1 = $conn->query($sql1);
                    if ($result1) {
                      header("Location: book_manager.php");
                    }
                    echo "<div class='alert alert-danger'> Fail </div>";
                }else{
                    echo "<div class='alert alert-danger'> Các mục không được trống </div>";
                }
              }
              }
               
              
        ?>







          
            <hr class="mb-4">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Lưu thay đổi</button>
            <a type="button" href="book_manager.php" class="btn btn-secondary btn-lg">Cancel</a>
          </form>
        </div>
      </div>





  </body>
</html>