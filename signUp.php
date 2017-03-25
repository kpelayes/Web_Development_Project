<?php
session_set_cookie_params(0);
session_start();

$dsn = 'mysql:host=localhost;dbname=Users';
$username = 'admin';
$password = 'pa55word';

// creates PDO object
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo "<p>An error occurred while connecting to
             the database: $error_message </p>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from Form
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);
    $firstName = ($_POST['firstName']);
    $lastName = ($_POST['lastName']);
    if (!empty($username)and  !empty($password)and !empty($email)and !empty($firstName)and!empty($lastName)){
    	$query = 'INSERT INTO accounts
          	VALUES(:username,:email,:password,:firstName,:lastName)';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->bindValue(':email', $email);
		$statement->bindValue(':firstName', $firstName);
		$statement->bindValue(':lastName', $lastName);
		$statement->execute();
			$statement->closeCursor();
		echo "<h2>Successfully registered, you may login now</h2>";
   		include('store.html');}
   	else {echo "<h2>Please try again</h2>";
   		include('store.html');}

}
?>