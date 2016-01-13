<?php

		function addToCart($dataArray) {

			$sum_total = ($dataArray[3]*$dataArray[2]);
			$shippingCharge = rand(5, 15);
			$total_charge = $sum_total + $shippingCharge;

			$dataArrayVal = array('pd_id'=>$dataArray[0], 'product_name'=>$dataArray[1], 'price'=>$dataArray[2],
			 											'quantity'=>$dataArray[3],'shippingCharge'=> $shippingCharge,
														'total'=> $total_charge
														);
			$itemArray = array($dataArray[0]=>$dataArrayVal);
			if(!empty($_SESSION["cart_item"])) {

				if(checkIfExistInSession($dataArray[0])){
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($dataArray[0] == $_SESSION["cart_item"][$k]['pd_id']){
							$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
						}
					}
				} else {
					echo "Inside Else ";
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				echo "Initial add ";
				$_SESSION["cart_item"] = $itemArray;
			}

		}

		function removeFromCart($pd_id) {
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($pd_id == $_SESSION["cart_item"][$k]['pd_id']){
						unset($_SESSION["cart_item"][$k]);
					}

					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
		}

		function emptyCart($fname) {
			unset($_SESSION["cart_item"]);
		}

		function checkIfExistInSession($pd_id) {
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($pd_id == $_SESSION["cart_item"][$k]['pd_id']){
						return true;
					}
				}
			}
			return false;
		}

?>
