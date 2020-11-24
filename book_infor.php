<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BookInformationPage</title>
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
				            		<a class="btn btn-danger"  href="logout.php">Đăng xuất</a>
				           		</li>


				        	</ul>
	        	
	          	<form class="form-inline" action="search.php" method="get">
	    			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
	    			<button class="btn btn-secondary" type="submit" >Tìm kiếm</button>
	  			</form>
	        </div>
		
    </nav>

    <!-- giao diện nội dung -->

<div class="container" id="main">      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="admin_book.php">Books</a> &gt; The Name of the Wind (The Kingkiller Chronicle Book 1)</p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="img/the name of the wind.jpg">
        </div>
        <div class="col-md-6">
          <h4>Ghi chú</h4>
          <p>The Name of the Wind is fantasy at its very best, and an astounding must-read title.

			I have stolen princesses back from sleeping barrow kings. I burned down the town of Trebon. I have spent the night with Felurian and left with both my sanity and my life. I was expelled from the University at a younger age than most people are allowed in. I tread paths by moonlight that others fear to speak of during day. I have talked to Gods, loved women, and written songs that make the minstrels weep.

			My name is Kvothe.

			You may have heard of me

			So begins the tale of Kvothe - currently knowown as Kote, the unassuming innkeepter - from his childhood in a troupe of traveling players, through his years spent as a near-feral orphan in a crime-riddled city, to his daringly brazen yet successful bid to enter a difficult and dangerous school of magic. In these pages you will come to know Kvothe the notorious magician, the accomplished thief, the masterful musician, the dragon-slayer, the legend-hunter, the lover, the thief and the infamous assassin.

			The Name of the Wind is fantasy at its very best, and an astounding must-read title.</p>
          <h4>Book Details</h4>
          <table class="table">
          	<tbody>
          		<tr>
	              <td>ID</td>
	              <td>9780575081406</td>
          		</tr>
          		<tr>
	              <td>Tên sách</td>
	              <td>Patrick Rothfuss</td>
           		</tr>
                <tr>
	              <td>Tác giả</td>
	              <td>Patrick Rothfuss</td>
           		</tr>
           		<tr>
	              <td>Thể loại</td>
	              <td>Kinh dị</td>
           		</tr>
                <tr>
	              <td>Giá tiền</td>
	              <td>19.99</td>
                </tr>
                <tr>
	              <td>Nhà cung cấp</td>
	              <td>Patrick Rothfuss</td>
           		</tr>
           		<tr>
	              <td>Ngày phát hành</td>
	              <td>21/12/2012</td>
           		</tr>
               
            </tbody>
           </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookisbn" value="9780575081406">
            
            <input type="submit" value="Add to cart" name="cart" class="btn btn-primary">
          </form>
       	</div>
      </div>
	</div>




</body>
</html>