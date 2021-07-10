<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
		<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="container">

<div class="image-wrapper">
	<p><img class="noshow, scale-image" src="header.jpg" alt="Photo of inside of CIS 122 restaurant"></p>
</div>

<?php

// Get post variables from HTML form
$wings = substr(filter_input(INPUT_POST, 'wings', FILTER_SANITIZE_NUMBER_INT),0,2);
$nachos = substr(filter_input(INPUT_POST, 'nachos', FILTER_SANITIZE_NUMBER_INT),0,2);
$dip = substr(filter_input(INPUT_POST, 'dip', FILTER_SANITIZE_NUMBER_INT),0,2);
$quesadilla = substr(filter_input(INPUT_POST, 'quesadilla', FILTER_SANITIZE_NUMBER_INT),0,2);
$chips = substr(filter_input(INPUT_POST, 'chips', FILTER_SANITIZE_NUMBER_INT),0,2);
$calamari = substr(filter_input(INPUT_POST, 'calamari', FILTER_SANITIZE_NUMBER_INT),0,2);
$pastrami = substr(filter_input(INPUT_POST, 'pastrami', FILTER_SANITIZE_NUMBER_INT),0,2);
$panini = substr(filter_input(INPUT_POST, 'panini', FILTER_SANITIZE_NUMBER_INT),0,2);
$reuben = substr(filter_input(INPUT_POST, 'reuben', FILTER_SANITIZE_NUMBER_INT),0,2);
$vegetarian = substr(filter_input(INPUT_POST, 'vegetarian', FILTER_SANITIZE_NUMBER_INT),0,2);
$turkey = substr(filter_input(INPUT_POST, 'turkey', FILTER_SANITIZE_NUMBER_INT),0,2);
$shrimp = substr(filter_input(INPUT_POST, 'shrimp', FILTER_SANITIZE_NUMBER_INT),0,2);
$chickenpasta = substr(filter_input(INPUT_POST, 'chickenpasta', FILTER_SANITIZE_NUMBER_INT),0,2);
$angelhair = substr(filter_input(INPUT_POST, 'angelhair', FILTER_SANITIZE_NUMBER_INT),0,2);
$alfredo = substr(filter_input(INPUT_POST, 'alfredo', FILTER_SANITIZE_NUMBER_INT),0,2);
$couponcode = substr(filter_input(INPUT_POST, 'couponcode', FILTER_SANITIZE_STRING),0,15);

$itemtotal=0;
$subtotal=0;
$taxes = 0;
$discount = 0;
$total = 0;

?>
<form action="order2.php" method="post" id="myform">

<h2 class="blue center">Please review and submit your order</h2>

<table class="tablectr">
<tr><th>Menu Item</th><th>Quantity</th><th>Price</th><th>Sub Totol</th></tr>
<?php

if ($wings > 0) {
	$itemtotal = $wings * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Boneless Wings and Skins Sampler</td><td class=\"center\">$wings</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"wings\" value=\"" . $wings . "\">";
	}
if ($nachos > 0) {
	$itemtotal = $nachos * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Three Cheese Nachos</td><td class=\"center\">$nachos</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"nachos\" value=\"" . $nachos . "\">";
	}
if ($dip > 0) {
	$itemtotal = $dip * 6.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Spinach Artichoke Dip</td><td class=\"center\">$dip</td><td class=\"center\">$6.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"dip\" value=\"" . $dip . "\">";
	}
if ($quesadilla > 0) {
	$itemtotal = $quesadilla * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Santa Fe Chicken Quesadilla</td><td class=\"center\">$quesadilla</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"quesadilla\" value=\"" . $quesadilla . "\">";
	}
if ($chips > 0) {
	$itemtotal = $chips * 5.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Chips and Salsa</td><td class=\"center\">$chips</td><td class=\"center\">$5.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"chips\" value=\"" . $chips . "\">";
	}
if ($calamari > 0) {
	$itemtotal = $calamari * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Fried Calamari</td><td class=\"center\">$calamari</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"calamari\" value=\"" . $calamari . "\">";
	}
if ($pastrami > 0) {
	$itemtotal = $pastrami * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Pastami Sandwich</td><td class=\"center\">$pastrami</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"pastrami\" value=\"" . $pastrami . "\">";
	}
if ($panini > 0) {
	$itemtotal = $panini * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Roasted Turkey & Avocado BLT Panini</td><td class=\"center\">$panini</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"panini\" value=\"" . $panini . "\">";
	}
if ($reuben > 0) {
	$itemtotal = $reuben * 8.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Reuben Sandwich</td><td class=\"center\">$reuben</td><td class=\"center\">$8.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"reuben\" value=\"" . $reuben . "\">";
	}
if ($vegetarian > 0) {
	$itemtotal = $vegetarian * 7.99;
	$subtotal = $subtotal + $itemtotal;
	echo "<tr><td>Vegetarian Sandwich</td><td class=\"center\">$vegetarian</td><td class=\"center\">$7.99</td><td class=\"center\">$$itemtotal</td></tr>";
	echo "<input type=\"hidden\" name=\"vegetarian\" value=\"" . $vegetarian . "\">";
	}

echo "<tr><td></td><td colspan=\"2\">Sub-Total</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"subtotal\" value=\"" . $subtotal . "\">";
echo "<input type=\"hidden\" name=\"couponcode\" value=\"" . $couponcode . "\">";

$taxes = number_format(($subtotal * .06),2);
echo "<tr><td></td><td colspan=\"2\">Taxes</td><td class=\"center\">$$taxes</td></tr>";
echo "<input type=\"hidden\" name=\"taxes\" value=\"" . $taxes . "\">";

// Start Coupon code code ***************************
if ($couponcode == "1234" or $couponcode == "5678")
{
	$discount = $subtotal * .1;
	echo "<tr><td></td><td colspan=\"2\">10% Discount</td><td class=\"center\">$" . number_format($discount,2) . "</td></tr>";
}
elseif ($couponcode == "2345" or $couponcode == "6789")
{
	$discount = $subtotal * .2;
	echo "<tr><td></td><td colspan=\"2\">20% Discount</td><td class=\"center\">$" . number_format($discount,2) . "</td></tr>";
}
echo "<input type=\"hidden\" name=\"discount\" value=\"" . $discount . "\">";
// End Coupon code code ***************************


$total = $subtotal + $taxes - $discount;
echo "<tr><td></td><th colspan=\"2\">Total</td><td class=\"center\">$" . number_format($total,2) . "</th></tr>";
echo "<input type=\"hidden\" name=\"total\" value=\"" . $total . "\">";

echo "</table>";

// End Coupon code code ***************************

// Payment information section *****************
?>

<p class="center">Enter payment information below or <a href="javascript: history.go(-1)">go back</a> and change the order.</p>

<h2 class="blue center">Payment Information</h2>

<table class="tablectr">
<tr><td>First Name</td><td>Last Name</td></tr>
<tr>
		<td><input type="text" name="firstname" size="20" maxlength="30"></td>
		<td><input type="text" name="lastname" size="25" maxlength="30"></td>
	  </tr>
<tr><td>Phone Number</td><td>E-Mail Address</td></tr>
<tr>
		<td>
			<input type="text" name="phone1" size="3" maxlength="3">-
			<input type="text" name="phone2" size="3" maxlength="3">-
			<input type="text" name="phone3" size="4" maxlength="4">
		</td>
		<td><input type="email" name="email" size="25" maxlength="35"></td>
	  </tr>
<tr><td>Credit Card No CCV No</td><td>Zip Code</td></tr>
<tr>
  <td>

	<select id="CardType" name="CardType">
	<option value="AmEx">American Express</option>
	<option value="Discover">Discover</option>
	<option value="MasterCard">MasterCard</option>
	<option value="Visa">Visa</option>
	</select>
	<input type="text" id="CardNumber" name="CardNumber" maxlength="24" size="24" required>
</td>
<td><input type="text" name="zipcode" size="5" maxlength="5"></td>
</tr>
<tr><td colspan="4">* We only accept Mastercard, Visa, Discover, and American Express</td></tr>

<tr><td colspan="2" class="center"><input type="submit" value="Submit"></td></tr>
</table>

</form>

<br>

</div>

</body>
</html>
