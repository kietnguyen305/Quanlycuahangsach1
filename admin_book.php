<!DOCTYPE html>
<html>
<head>
	<title>AdminPage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
	<!-- narbar trên -->
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

    <!-- giao diện nội dung -->

<div class="row">
  <div class="col-lg-3 mt-3">
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
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-3 pt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/becoming.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 pt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/becoming.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 pt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/becoming.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 pt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/becoming.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 pt-3">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="img/becoming.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
		</div>
	</div>

</div>




</body>
</html>