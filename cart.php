<?php
@ob_start();
session_start();
?>

<?php
    require_once('cart.php');

	$conn = db_connect();
	// book_isbn got from form post method, change this place later.
	if(isset($_POST['book_id'])){
		$book_id = $_POST['book_id'];
	}

	if(isset($book_id)){
		// new iem selected
		if(!isset($_SESSION['cart'])){
			// $_SESSION['cart'] is associative array that bookisbn => qty
			$_SESSION['cart'] = array();

			$_SESSION['total_name'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$book_id])){
			$_SESSION['cart'][$book_id] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$book_id]++;
			unset($_POST);
		}
	}

	// if save change button is clicked , change the qty of each bookisbn
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $id =>$qty){
			if($_POST[$id] == '0'){
				unset($_SESSION['cart']["$id"]);
			} else {
				$_SESSION['cart']["$id"] = $_POST["$id"];
			}
		}
	}


	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_name'] = total_items($_SESSION['cart']);
?>
   	<form action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Sản phẩm</th>
	   			<th>Giá</th>
	  			<th>Số lượng</th>
	   			<th>Tổng</th>
	   		</tr>
	   		<?php
		    	foreach($_SESSION['cart'] as $id => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookById($conn, $id));
			?>
			<tr>
				<td><?php echo "$" . $book['book_price']; ?></td>
				<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>
				<td><?php echo "$" . $qty * $book['book_price']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_name']; ?></th>
		    	<th><?php echo "$" . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
		   <button type="Xác nhận" class="btn btn-primary" name="save_change"><span class="glyphicon glyphicon-ok"></span>&nbsp;Lưu thay đổi</button>
	  
	</form>
	<br/><br/>
	<a href="purchase.php" class="btn btn-primary">Đi tới Thanh toán</a> 
	<a href="book.php" class="btn btn-primary">Tiếp tục mua hàng</a>
<?php
	} else {
		echo "<p class=\"text-warning\">Giỏ của bạn trống trơn! Hãy chắc chắn rằng bạn đã thêm một số sách trong đó!</p>";
	}
	if(isset($_SESSION['user'])){
	$customer=getCustomerIdbyEmail($_SESSION['email']);
	$customerid=$customer['id'];
	$query="SELECT * FROM cart join cartitems join books join customers
		on customers.id='$customerid' and cart.customerid='$customerid' and cart.id=cartitems.cartid and  cartitems.productid=books.book_id";
	 $result=mysqli_query($conn,$query);
	 if(mysqli_num_rows($result)!=0){
	 echo '	<br><br><br><h4>Lịch sử mua hàng của bạn</h4><table class="table">
	 <tr>
		 <th>Sản phẩm</th>
		 <th>Số lượng</th>
		<th>Ngày</th>
	 </tr>';
		for($i = 0; $i < mysqli_num_rows($result); $i++){
			
			while($query_row = mysqli_fetch_assoc($result)){
				echo '<tr>
				<td>
				<a href="book.php?bookid=';
				echo $query_row['book_id'];
				echo '">';
				echo '<img style="height:100px;width:80px"class="img-responsive img-thumbnail" src="./bootstrap/img/';
				echo $query_row['img'];
				echo '">';
				echo ' </a>
				</td>
				<td>';
				echo $query_row['Số lượng'];
				echo '
				</td>
				<td>';
				echo $query_row['Ngày'];
				echo'
				</td>
				</tr>';
			}
		}
		echo '</table>';
	}
}
?>
