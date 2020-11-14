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
                        <a class="btn btn-danger"  href="#">Đăng xuất</a>
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
          <h4 class="mb-3">Thêm sách</h4>
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
                <label for="lastName">Tên sách</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Tác giả <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Thể loại</label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" required="">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Giá tiền <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             
             <div class="mb-3">
              <label for="email">Nhà cung cấp <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="email">Số lượng <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="mb-3">
              <label for="email">Ngày phát hành <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="dd/mm/yyyy" >
              <div class="invalid-feedback">
                
              </div>
            </div>
             <div class="form-group">
                <label for="exampleFormControlTextarea1">Ghi chú</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

          
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg mb-4">Thêm sách</button>
            <a type="button" href="book_manager.php" class="btn btn-secondary btn-lg mb-4">Cancel</a>
              
          </form>
        </div>
      </div>





  </body>
</html>