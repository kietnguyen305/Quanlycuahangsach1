<?php <?php
@ob_start();
session_start();
?>

<?php
    require_once('purschase.php');
    mysqli_set_charset($conn, 'UTF8');
   
	// connect database
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$customer = getCustomerIdbyEmail($_SESSION['email']);
    ?>
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
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $id));
			?>
		<tr>
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
		<tr>
			<td>Phí vận chuyển</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>20.00</td>
		</tr>
		<tr>
			<th>Tổng bao gồm cả vận chuyển</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo "$" . ($_SESSION['total_price'] + 20); ?></th>
		</tr>
	</table>
	<br>
	<br>
	<h4 style="margin-left:-20px">Thông tin của bạn</h4>
	<br>
	<form method="post" action="process.php" class="form-horizontal">
	<div class="form-group">
        <label for="exampleInputEmail1">Firstname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $customer['firstname']?>" name="firstname">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Lastname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $customer['lastname']?>" name="lastname">
    </div>

    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $customer['address']?>" name="address">
    </div>
    <div class="form-row">
	<div class="form-group col-md-2">
        </div>
        <div class="form-group col-md-4">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $customer['city']?>">
        </div>
        <div class="form-group col-md-2">
        </div>
        <div class="form-group col-md-4">
    </div>
	<br>
    <div class="form-group col-md-12" >
        <div class="form-group" >
            <div class="col-lg-10 col-lg-offset-2" style="margin-left:0px">
              	<button type="Đặt lại" class="btn btn-default">Hủy bỏ</button>
              	<button type="Xác nhận" class="btn btn-primary">Mua hàng</button>
            </div>
        </div>
    </form>
	<p class="lead">Vui lòng nhấn Mua hàng để xác nhận giao dịch hoặc Hủy bỏ để khởi tạo giỏ hàng mới.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Giỏ của bạn trống trơn! Hãy chắc chắn rằng bạn đã thêm một số sách trong đó!</p>";
	}
?>