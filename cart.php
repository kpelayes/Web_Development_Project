<?php 
    //set default value of variables for initial page load
    if (!isset($first)) { $first = ''; } 
    if (!isset($last)) { $last = ''; } 
    if (!isset($street)) { $street = ''; } 
    if (!isset($city)) { $city = ''; } 
    if (!isset($zip)) { $zip = ''; } 
    if (!isset($firstName)) { $firstName = ''; } 
    if (!isset($lastName)) { $lastName = ''; } 
    if (!isset($cardNumber)) { $cardNumber = ''; } 
    if (!isset($cvv)) { $cvv = ''; } 
    if(!isset($subtotal)){$subtotal = filter_input(INPUT_POST, 'total');}
    
    $shipCost=array('standard'=>0,'express'=>3.99,'oneDay'=>4.99);
    
    if(isset($shipMethod)){
    	$shipMethod = filter_input(INPUT_POST, 'shipMethod');
    }
    else{
   		$shipMethod='standard';}
    
    function calcTax($subtotal){
    	return $subtotal*.09;
    }
    
    function calcTotal($subtotal, $shipMethod) {
    	$shipCost=array('standard'=>0,'express'=>3.99,'oneDay'=>4.99);
    	$total = $subtotal + calcTax($subtotal);  
    	$total=$total + $shipCost[$shipMethod];
    	return $total;
	}

?> 

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="main2.css">
		<title>Checkout</title></head>
	</head>
	<body>
		<header>
			<ul>
 				<li><a href="shop.php">Store</a></li>
  				<li><a href="gallery.php">Gallery</a></li>
  				<li><a class="active" href="about.php">About</a></li>
  				<li><a href="index.php">Home</a></li>
  				<li><img src="este.png" alt="Logo"></li>
			</ul>
			<h1>Checkout</h1>
		</header>
		<main>
			<?php if (!empty($errorMessage)) { ?>
        <p class="error"><?php echo htmlspecialchars(
                         $errorMessage); ?></p>
    <?php } ?>
    		<form action="processOrder.php" method="post">
    		<h2>Shipping Method</h2>
    		<input type="radio" name="shipMethod" value="standard" checked <?php if (isset($_POST['shipMethod']) && $_POST['shipMethod']=='standard') echo ' checked="checked"';?>>Standard (5-7 days) - free<br>
			<input type="radio" name="shipMethod" value="express"<?php if (isset($_POST['shipMethod']) && $_POST['shipMethod']=='express') echo ' checked="checked"';?>>Express (2-3 days)- $3.99<br>
			<input type="radio" name="shipMethod" value="oneDay"<?php if (isset($_POST['shipMethod']) && $_POST['shipMethod']=='oneDay') echo ' checked="checked"';?>>Next Day (1 day) - $4.99<br><br>
		    <h2>Shipping Address</h2>
				<br><br>First Name:<input type="text" name="first" value="<?php echo htmlspecialchars(
                                $first); ?>">
				&nbspLast Name:<input type="text" name="last" value="<?php echo htmlspecialchars(
                                $last); ?>"><br><br>
				Street:<input type="text" name="street" value="<?php echo htmlspecialchars(
                                $street); ?>">
				City:<input class="small" type="text" name="city" value="<?php echo htmlspecialchars(
                                $city); ?>">
				State:<select name="state">
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AZ">AZ</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OH">OH</option>
	<option value="OK">OK</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
</select>
				Zip:<input class="smaller" type="text" name="zip" value="<?php echo htmlspecialchars(
                                $zip); ?>"><br><br><br>
				<h2>Payment Information</h2><br><br>
				First Name:<input type="text" name="firstName"value="<?php echo htmlspecialchars(
                                $firstName); ?>">
				&nbspLast Name:<input type="text" name="lastName"value="<?php echo htmlspecialchars(
                                $lastName); ?>"><br><br>
				Card number:<br><input type="text" name="cardNumber"value="<?php echo htmlspecialchars(
                                $cardNumber); ?>">
				Expiration: <select name="months">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				  </select>
			  <select name="year">
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
			  </select>
			  &nbspCVV:<input class="smaller" type="text" name="cvv" value="<?php echo htmlspecialchars(
                                $cvv); ?>">
		</main>
		<aside>
			<h2>Order Summary</h2>
		    <input type="hidden" name="subtotal" value="<?php echo htmlspecialchars($subtotal); ?>">
		   Subtotal: $ <?php echo htmlspecialchars($subtotal); ?><br>
		    Shipping: $ <?php echo htmlspecialchars($shipCost[$shipMethod]); ?><br>
		    Tax: $ <?php echo calcTax($subtotal); ?><br>
		    TOTAL: <?php echo calcTotal($subtotal,$shipMethod);?><br>
		</aside>
		 <input style="clear:both;float:left;margin-top:20px;" type="submit"  class="button button1" value="Submit Order">
		</form>
		<footer>
			<p id="copyright">&copy 2016 Karen Pelayes</p></footer>
		</footer>
	</body>
<html>