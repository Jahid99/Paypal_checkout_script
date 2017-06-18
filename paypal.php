<!DOCTYPE html>
<html>
<head>
	<title>Paypal Checkout</title>
</head>
<body>

<?php 

	$accessories = array
  (
  array("books",10,2),
  array("phone",2,12),
  array("laptop",5,2)
  );

  $i = 0

 ?>


 <table>
  <tr>
    <th>Item Name</th>
    <th>Amount</th>
    <th>Quantity</th>
  </tr>

  <?php 

	 foreach ($accessories as $key => $value)
{
		$i++;
	 ?>

  <tr>
    <td><?php echo $value[0]; ?></td>
    <td><?php echo $value[1]; ?></td>
    <td><?php echo $value[2]; ?></td>
  </tr>
  
  
  	<?php 
}

	 ?>
  


</table>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="business" value="jahidulpathan@gmail.com">
	<input type="hidden" name="image_url" value="https://www.elimkaadda.com/image/favi.png">


	<?php 

	 foreach ($accessories as $key => $value)
{
		$i++;
	 ?>

	<input type="hidden" name="item_name_<?php echo $i;?>" value="<?php echo $value[0]; ?>">
	<input type="hidden" name="amount_<?php echo $i;?>" value="<?php echo $value[1]; ?>">
	<input type="hidden" name="quantity_<?php echo $i;?>" value="<?php echo $value[2]; ?>">


	<?php 
}

	 ?>

	<input type="submit" name="PayPal">
</form>


</body>
</html>