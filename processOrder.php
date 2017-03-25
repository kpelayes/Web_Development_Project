<?php
    // get the data from the form
    $first = filter_input(INPUT_POST, 'first');
    $last = filter_input(INPUT_POST, 'last');
    $street = filter_input(INPUT_POST, 'street');
    $city = filter_input(INPUT_POST, 'city');
    $zip = filter_input(INPUT_POST, 'zip');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $cardNumber = filter_input(INPUT_POST, 'cardNumber');
    $cvv = filter_input(INPUT_POST, 'cvv');
    $subtotal=filter_input(INPUT_POST,'subtotal');
    $shipMethod = filter_input(INPUT_POST, 'shipMethod');
    $state = filter_input(INPUT_POST, 'state');
    
	//input validation
	if (empty($first) || empty($last) || empty($street) || empty($city) || empty($zip)  ) {
		$errorMessage='You must complete the Shipping 
		Address section.';
	}else if (empty($firstName) || empty($lastName) || empty($cardNumber) || empty($cvv) ) {
		$errorMessage='You must complete the Payment Information section.';
	}else if(!is_numeric($zip)){
		 $errorMessage= 'The zip code was entered incorrectly.';
	}else if(!is_numeric($cardNumber)){
		 $errorMessage= 'The card number was entered incorrectly.';
	}else if(!is_numeric($cvv)){
		$errorMessage= 'The cvv was entered incorrectly.';
	}else{
		$errorMessage='';
	}
	$fileName="log_".date("Y")."_".date("m")."_".date("d").".csv";
	if(!file_exists(dirname($fileName))) 
    mkdir(dirname($fileName));
	$myfile = fopen($fileName, "a") ;
	fprintf($myfile,"%s %s %s %s %s %s %s %s %s %s %s ", $first, $last, $street, $city,$state, $zip, $firstName, $lastName, $cardNumber, $cvv, $shipMethod);
	
	//if an error message exists go to checkout page
	if ($errorMessage !=''){
		include('cart.php');
		exit();
	}else{echo 'thank you for your order.' ;
	include('cart.php');}
	
?>