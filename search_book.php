<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>BookDream</title>
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


    <?php

      $text = trim($_POST['text']);
      require_once('connect.php');
      mysqli_set_charset($conn, 'UTF8');
      
      // $conn = db_connect();
      $query = "SELECT * FROM books join publisher on books.publisherid=publisher.publisherid where book_id like'%$text%' or book_author like '%$text%' or book_name like '%$text%' or publisher_name like  '%$text%' ";
      $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result)==0){
        echo '
        <div class="alert alert-warning" role="alert">
        Nothing Found... 
        </div>' . ' <div class="search_top" >
           
     </div>';
      }else{
        $number=mysqli_num_rows($result);
       echo  '<div class="alert alert-success" role="success"> ';
       echo $number;
       echo ' Books Found</div>' . ' <div class="search_top" >       
    </div>';

      }

      // require_once "./template/header.php";
    ?>
         
      <p class="lead text-center text-muted">Search Result</p>
        <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
          <div class="row">
            <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
              <div class="col-md-3">
                <a href="book.php?book_id=<?php echo $query_row['book_id']; ?>">
                  <img class="img-responsive img-thumbnail" src="<?php echo $query_row['img']; ?>">
                </a>
              </div>
            <?php
              } ?> 
          </div>
    <?php
          }
      if(isset($conn)) { mysqli_close($conn); }
      // require_once "./template/footer.php";
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>