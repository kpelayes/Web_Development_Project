<?php
	
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
    	<link rel="stylesheet" href="main2.css">
    	<title>Register</title>
    </head>
    <body>
        <ul>
            <li><a href="shop.php">Store</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Home</a></li>
            <li><img src="este.png" alt="Logo"></li>
        </ul>
    	<h1>Sign up</h1>
    	<br><br>
    	<h3>Create an account to view or shop our products</h3>
    	<form action="signUp.php" method="post">
    	First Name:<input type="text" name="firstName"><br><br>
    	Last Name:<input type="text" name="lastName"><br><br>
    	Email:<input type="text" name="email"><br><br>
    	Username:<input type="text" name="username"><br><br>
		Password:<input type="text" name="password"><br><br>
		<input type="submit" name="login">
    	</form>
    </body>
    <footer>
    	<p id="copyright">&copy 2016 Karen Pelayes</p>
    </footer>
</html>