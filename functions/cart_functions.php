<?php

	function total_price($cart){
		$price = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $id => $qty){
		  		$bookprice = getbookprice($id);
		  		if($bookprice){
		  			$price += $bookprice * $qty;
		  		}
		  	}
		}
		return $price;
	}

	function total_name($cart){
		$name = 0;
		if(is_array($cart)){
			foreach($cart as $id => $qty){
				$name += $qty;
			}
		}
		return $name;
	}
?>