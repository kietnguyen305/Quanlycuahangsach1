<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>AddSupplierPage</title>
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
          <h4 class="mb-3">Thêm nhà cung cấp</h4>
          <form class="needs-validation" action="addpublisher.php" method="POST" enctype="multipart/form-data" novalidate="">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="id">ID</label>
                <input type="number" class="form-control" name="id_P" id="id" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col mb-3">
                <label for="name">Tên nhà cung cấp</label>
                <input type="text" class="form-control" name="name_P" id="name" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="phonenum">Số điện thoại liên lạc</label>
              <div class="input-group">
                <input type="number" class="form-control" name="phonenum_P" id="phonenum" required="" placeholder="01234566789">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email_P" id="email" placeholder="youremail@example.com" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="diachi">Địa chỉ <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="address_P" id="diachi" >
              <div class="invalid-feedback">
                
              </div>
            </div>
            
             

          
            <hr class="mb-4">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Thêm nhà cung cấp</button>
            <a type="button" href="publisher_manager.php" class="btn btn-secondary btn-lg">Cancel</a>
          </form>
        </div>
      </div>





  </body>
</html>