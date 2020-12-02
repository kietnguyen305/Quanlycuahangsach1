<?php
@ob_start();
session_start();
?>
<?php
    require_once('connect.php');
    mysqli_set_charset($conn, 'UTF8');
    $id = $_GET['id'];
    $sql ="SELECT * FROM employee WHERE id_emp like '".$id."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?> 


<!DOCTYPE html>
<html>
<head>
  <title>EditEmployeePage</title>
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
          <h4 class="mb-3">Chỉnh sửa thông tin nhân viên</h4>
          <form class="needs-validation" novalidate="" action="" method="post">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="id">ID</label>
                <input type="number" class="form-control" name="id_E" id="id" placeholder="" value="<?= $row['id_emp'] ?>" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col mb-3">
                <label for="name_E">Họ và tên nhân viên</label>
                <input type="text" class="form-control" id="name_E" name="name_E" placeholder="" value="<?= $row['name_emp'] ?>" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

             <div class="mb-3">
              <label for="birthday">Ngày sinh<span class="text-muted"></span></label>
              <input type="date" class="form-control"  name = "birthday_E" id="birthday" placeholder="yyyy/mm/dd" value="<?= $row['birthday_emp'] ?>" >
              <div class="invalid-feedback">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="gender">Giới tính</label>
              <label><input <?php if ($row['gender_emp'] == 'Nam') { echo 'checked';} ?> type="radio" name="gender_E" value="Nam">Nam</label>
              <label><input <?php if ($row['gender_emp'] != 'Nam') { echo 'checked';} ?> type="radio" name="gender_E" value="Nữ">Nữ</label>

              
            </div>


             <!-- <div class="mb-3">
              <div class="form">
                <label><input type="radio" name="gender_E" value="Nam" checked>Nam</label>
              </div>
              <div class="checkbox">
                <label><input type="radio" name="gender_E" value="Nữ">Nữ</label>
              </div>
              <div class="invalid-feedback">
                
              </div>
            </div> -->

            <div class="mb-3">
              <label for="phonenum">Số điện thoại</label>
              <div class="input-group">
                <input type="number" class="form-control" name="phonenum_E" id="phonenum" value="<?= $row['phonenum'] ?>" required="" placeholder="01234566789">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
            
           
             

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email_E" id="email" value="<?= $row['email'] ?>" placeholder="youremail@example.com" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="address">Địa chỉ <span class="text-muted"></span></label>
              <input type="text" name="address_E" class="form-control" value="<?= $row['address'] ?>" id="address" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="username">Tài khoản<span class="text-muted"></span></label>
              <input type="text" name="username_E" class="form-control" value="<?= $row['username'] ?>" id="username"  >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="password">Mật khẩu<span class="text-muted"></span></label>
              <input type="text" class="form-control" name="password_E" value="<?= $row['password'] ?>" id="password" >
              <div class="invalid-feedback">
                
              </div>
            </div>
            <div class="mb-3">
              <label for="job">Công việc</label>
               <?php 

              $sql2 ="SELECT * FROM role";
              $result2 = $conn->query($sql2);
             

              if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) { ?>

                <div class="form">
                  <label><input <?php if ($row2['id_role'] ==  $row['role_emp']) { ?> checked <?php
                   
                  } ?> type="radio" name="job_E" value="<?= $row2['id_role'] ?>"><?= $row2['name_role'] ?></label>
                </div>
               <?php }
              }

               ?>

               
                          
              
            </div>


       <!--      <div class="mb-3">
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
          </div> -->

           <?php 
           if (isset($_POST['submit'])) {
             if(isset($_POST['id_E']) && isset($_POST['name_E']) && isset($_POST['birthday_E']) && isset($_POST['gender_E'])  && isset($_POST['phonenum_E'])  && isset($_POST['email_E'])   && isset($_POST['address_E']) && isset($_POST['username_E']) && isset($_POST['password_E']) && isset($_POST['job_E']) ){
                  
                  if ($_POST['id_E'] != "" && $_POST['name_E'] != "" && $_POST['birthday_E'] != "" && $_POST['gender_E'] != "" && $_POST['phonenum_E'] != "" && $_POST['email_E'] != "" && $_POST['address_E'] != "" && $_POST['username_E'] != "" && $_POST['password_E'] != "" && $_POST['job_E'] != "") {
                    $sql1 = "UPDATE employee SET id_emp = '".$_POST['id_E']."',name_emp = '".$_POST['name_E']."',birthday_emp = '".$_POST['birthday_E']."',gender_emp = '".$_POST['gender_E']."',phonenum ='".$_POST['phonenum_E']."',email ='".$_POST['email_E']."',address ='".$_POST['address_E']."',username ='".$_POST['username_E']."',password = '".$_POST['password_E']."',role_emp  = '".$_POST['job_E']."'WHERE id_emp like'". $_GET['id']."'";
                    $result1 = $conn->query($sql1);
                    if ($result1) {
                      header("Location: employee_manager.php");
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
            <a type="button" href="employee_manager.php" class="btn btn-secondary btn-lg">Cancel</a>
          </form>
        </div>
      </div>





  </body>
</html>