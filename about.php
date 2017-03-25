<?php
     session_set_cookie_params(0);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main2.css">
    <title>About</title></head>
    <meta name="description" content="Variations of poodles (sizes and colors)">
    <meta name="keywords" content= "poodle, dog breed, hypoallergenic">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="photo_gallery.js"></script>
</head>
<body>
<header>
<ul>
	<?php if(isset($_SESSION['log'])){?>
		<li><a href="index.php?logout=true">logout</a></li>
   <?php } ?>
  <li><a href="shop.php">Store</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a class="active" href="about.php">About</a></li>
  <li><a href="index.php">Home</a></li>
  <li><img src="este.png" alt="Logo"></li>
</ul>
<h1 class="one">More About Poodles</h1>
</header>
<main>
    <h1 class="two">Variety</h1>
    <p>Poodles vary in color and sizes. The smallest is the toy, the next largest is the miniature, and then standard. There are white, black, gray, silver, brown, apricot, cream, blue and probably more colors. They also have many distinctive haircut styles. </p>
    <a href="gallery.html"><button class="button button1" id="photos">Photos</button></a>
</main>
<aside><h3>Watch a video!</h3>
<iframe width="520" height="345"
src="https://www.youtube.com/embed/74mx2OWM6mE">
</iframe> </aside>
<footer><p id="copyright">&copy 2016 Karen Pelayes</p></footer>
</body>
</html>