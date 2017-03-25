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
    $query = 'SELECT * FROM accounts
          WHERE username = :username and password = :password';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$product = $statement->fetch();
	$statement->closeCursor();
	
    // If result matched $username and $password, table row must be 1 row
    if ($product) {
        $_SESSION['log'] = $product['firstName']; // put session value here 
        header('Location: index.php');
    } else {
        echo "<h2>Your Login Name or Password is invalid</h2>";
       include('store.html'); 
    }
}
?>