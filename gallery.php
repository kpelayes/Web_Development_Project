<?php
	session_set_cookie_params(0);
	session_start();
	if(!isset($_SESSION['log'])){
		header('Location: store.html');
		die("please login");
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main3.css">
    <title>Gallery</title></head>
    <meta name="description" content="gallery of poodle pictures">
    <meta name="keywords" content= "poodle, dog breed, hypoallergenic">

</head>
<body>
<header>
<ul>
	<?php if(isset($_SESSION['log'])){?>
		<li><a href="index.php?logout=true">logout</a></li>
   <?php } ?>
  <li><a href="shop.php">Store</a></li>
  <li><a class="active" href="gallery.php">Gallery</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="index.php">Home</a></li>
  <li><img src="este.png" alt="Logo"></li>
</ul>
</header>
<h1 class="one">Gallery</h1>
</header>
<main><h1 class="two"></h1>
<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle1.png" alt="poodle1" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle2.png" alt="Fjords" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle3.png" alt="Fjords" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle4.png" alt="Fjords" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle5.png" alt="Fjords" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle6.png" alt="Fjords" width="300" height="200">
  </a>
</div>

<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle7.png" alt="Fjords" width="300" height="200">
  </a>
</div>
<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle8.png" alt="Fjords" width="300" height="200">
  </a>
</div>
<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle9.png" alt="Fjords" width="300" height="200">
  </a>
</div>
<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="poodlePictures/poodle10.png" alt="Fjords" width="300" height="200">
  </a>
</div>
</main>
<aside>
 </aside>
<footer><p id="copyright">&copy 2016 Karen Pelayes</p></footer>
</body>
</html>