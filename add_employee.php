<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>AddEmployeePage</title>
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
          <h4 class="mb-3">Thêm nhân viên <h4>
          <form class="needs-validation" action="addemployee.php" method="POST" enctype="multipart/form-data" novalidate="">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="id">ID</label>
                <input type="number" class="form-control" name="id_E" id="id" placeholder="" value="" required="">
                
              </div>
              <div class="col mb-3">
                <label for="name">Họ và tên nhân viên</label>
                <input type="text" class="form-control" name="name_E" id="name" placeholder="" value="" required="">
               
              </div>
            </div>
           <div class="mb-3">
              <label for="birthday">Ngày sinh<span class="text-muted"></span></label>
              <input type="date" class="form-control"  name = "birthday_E" id="birthday" placeholder="yyyy/mm/dd" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <div  class="form">
                <label><input type="radio" name="gender_E" value="Nam" checked>Nam</label>
              </div>
              <div class="checkbox">
                <label><input type="radio" name="gender_E" value="Nữ">Nữ</label>
              </div>
              <div class="invalid-feedback">
                
              </div>
            </div>


            <div class="mb-3">
              <label for="phonenum">Số điện thoại</label>
              <div class="input-group">
                <input type="number" class="form-control" name="phonenum_E" id="phonenum" required="" placeholder="01234566789">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email_E" id="email" placeholder="youremail@example.com" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="diachi">Địa chỉ <span class="text-muted"></span></label>
              <input type="text" class="form-control" name="address_E" name="address_E" id="diachi" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="username">Tài khoản<span class="text-muted"></span></label>
              <input type="username" class="form-control" name="username_E" id="username"  >
              <div class="invalid-feedback">
                  
              </div>
            </div>
             <div class="mb-3">
              <label for="password">Mật khẩu<span class="text-muted"></span></label>
              <input type="password" class="form-control" name="password_E" id="password" >
              <div class="invalid-feedback">
                
              </div>
            </div>
            <!-- <div class="mb-3">
              <label for="job">Công việc<span class="text-muted"></span></label>
              <input type="text" class="form-control" name="job_E" id="job" >
              <div class="invalid-feedback">
                
              </div>
            </div> -->

            <div class="mb-3">
              <label for="job">Công việc<span class="text-muted"></span></label>
             <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="job_E" value="1">admin</label>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="job_E" value="2" checked>Thu kho</label>
            </div>
             <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="job_E" value="3">Nhan vien ban hang</label>
            </div>
          </div>
            
  <!--           
            <div class="mb-3">
              <label for="email">Phân quyền<span class="text-muted"></span></label>
             <div class="form-check">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Thêm sách</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Thanh Toán</label>
            </div>
             -->
             

          
            <hr class="mb-4">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Thêm nhân viên</button>
            <a type="button" href="employee_manager.php" class="btn btn-secondary btn-lg">Cancel</a>
          </form>
        </div>
      </div>





  </body>
</html>