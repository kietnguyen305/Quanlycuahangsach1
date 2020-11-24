<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>AddCategoryPage</title>
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
          <h4 class="mb-3">Thêm thể loại</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="firstName">ID</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col mb-3">
                <label for="lastName">Tên thể loại</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            
            
             

          
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg">Thêm thể loại</button>
            <a type="button" href="category_manager.php" class="btn btn-secondary btn-lg">Cancel</a>
          </form>
        </div>
      </div>





  </body>
</html>