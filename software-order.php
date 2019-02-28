<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
	<h1>Software Order</h1>
<?php

	// your code here
    include('inc-order-object.php');
  
    $cost = $_POST['cost'];
    $items = $_POST['items'];
  
    $order = new Order();
  
    $order->setItemCost($cost);
    $order->setNumItems($items);
  
    $subTotal = $order->getSubtotal();
    $tax = $order->getSalesTax();
    $shippingHandling = $order->getShippingHandling();
    $total = $order->getTotal();
	
	
	// you can change the variables in the table if you need to use different names
	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
?>
</body>
</html>