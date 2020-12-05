<?php
	session_start();
	// print out header here
	$title = "Kiểm tra";
	if(!isset($_SESSION['user'])){
		echo '<div class="alert alert-danger" role="alert">
		Bạn cần phải <a href="login.php">login</a> đầu tiên! 
	  </div>';
	}
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Sản phẩm</th>
			<th>Giá</th>
	    	<th>Số lượng</th>
	    	<th>Tổng</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookById($conn, $id));
			?>
		<tr>
			<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
			<td><?php echo "$" . $book['book_price']; ?></td>
			<td><?php echo $qty; ?></td>
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
	<?php 
		if(isset($_SESSION['user'])){
			echo '<form method="post" action="purchase.php" class="form-horizontal">
			<div class="form-group" style="margin-left:0px">
				<input type="submit" name="submit" value="Purchase" class="btn btn-primary" >
				<a href="cart.php" class="btn btn-primary">Edit Cart</a> 
			</div>
		</form>
		<p class="lead">Vui lòng nhấn Mua để xác nhận mua hàng của bạn hoặc Chỉnh sửa Giỏ hàng để thêm hoặc bớt các mặt hàng.</p>';
		}
	?>
	
<?php
	} else {
		echo "<p class=\"text-warning\">Giỏ của bạn trống trơn! Hãy chắc chắn rằng bạn đã thêm một số sách trong đó!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>