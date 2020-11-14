<!DOCTYPE html>
<html>
<head>
  <title>EmployeeManagerPage</title>
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
                        <a class="btn btn-danger"  href="#">Đăng xuất</a>
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
        <a type="button" href="employee_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhân viên</a>
      </div>
      <div class="col">
        <a type="button" href="supplier_manager.php" class="btn btn-secondary btn-lg btn-block">Quản lý nhà cung cấp</a>
      </div>
      <div class="col"> 
        <a type="button" href="#" class="btn btn-secondary btn-lg btn-block">Hiển thị thống kê</a>
      </div>
    </div>

  </div>
  <div class="col-lg-9 mt-3">
   <h4 class="mb-3">Quản lý nhân viên</h4>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">ID</th>
          <th scope="col">Họ tên nhân viên</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Email</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Tài khoản</th>
          <th scope="col">Mật khẩu</th>
          
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    <a type="button" href="add_employee.php" class="btn btn-warning">Thêm nhân viên</a>
  </div>
</div>




  </body>
</html>