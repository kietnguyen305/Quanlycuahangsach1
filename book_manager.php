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
  <div class="col-lg-3 mt-4">
    <div class="row">

      <div class="col-12"> 
        <button type="button" class="btn btn-secondary btn-lg btn-block">Quản lý sách</button>
      </div>
      <div class="col-12"> 
        <button type="button" class="btn btn-secondary btn-lg btn-block">Quản lý nhân viên</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-secondary btn-lg btn-block">Quản lý nhà cung cấp</button>
      </div>
      <div class="col"> 
        <button type="button" class="btn btn-secondary btn-lg btn-block">Hiển thị thống kê</button>
      </div>
    </div>

  </div>
  <div class="col-lg-9 mt-3">
     <h4 class="mb-3">Quản lý sách</h4>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">ID</th>
          <th scope="col">Tên sách</th>
          <th scope="col">Tác giả</th>
          <th scope="col">Thể loại</th>
          <th scope="col">Giá tiền</th>
          <th scope="col">Nhà cung cấp</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Ngày phát hành</th>
          <th scope="col">Ghi chú</th>
          
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

  </div>
</div>




  </body>
</html>