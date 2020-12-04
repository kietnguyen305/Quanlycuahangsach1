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

    
    

<div >
	<img src="img/home.jpg" class="card-img-top" alt="..." height="500px">
</div>
 
<div class="container mt-3">
	<div class="row">
		
		<div class="col">
			<h4 class="mt-3">HÀNG MỚI VỀ
				<a href="#" style="float: right;font-size: 16px;color: black;">Xem tất cả</a>
			</h4>
			<div style="background-color: #6B686D;height: 1px"></div>

			<div class="row mx-1 my-1">
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/becoming.jpg" class="card-img-top" alt="...">
				</div>
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/brokenthrone.jpg" class="card-img-top" alt="...">
				</div>
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/cityofashes.jpg" class="card-img-top" alt="...">
				</div>
			
			</div>
			<!-- ten chu de -->
			<h4 class="mt-3">SÁCH NỔI BẬT
				<a href="#" style="float: right;font-size: 16px;color: black;">Xem tất cả</a>
			</h4>
			<div style="background-color: #6B686D;height: 1px"></div>

			<div class="row mx-1 my-1">
				<!-- phan tu ben trong -->
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/monstersandghosts.jpg" class="card-img-top" alt="...">
				</div>
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/thenameofthewind.jpg" class="card-img-top" alt="...">
				</div>
				<div class="col-md-4 col-sm6 mt-1 md-1">
					<img src="img/becoming.jpg" class="card-img-top" alt="...">
				</div>
			
			</div>
		</div>

		
	<div>
	

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>