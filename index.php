<?php	
	session_set_cookie_params(0);
	session_start();
  function runMyFunction() {
   $_SESSION = array();   // Clear session data from memory
    session_destroy();     // Clean up the session ID
  }

  if (isset($_GET['logout'])) {
    runMyFunction();
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Home</title></head>
    <meta name="description" content="brief overview of the poodle dog breed">
    <meta name="keywords" content= "poodle, dog breed, hypoallergenic">
<body>
<ul>
<?php if(isset($_SESSION['log'])){?>
		<h2><?php echo "Welcome ".$_SESSION['log']."!"?></h2>
   <?php }?>
<?php if(isset($_SESSION['log'])){?>
		<li><a href="index.php?logout=true">logout</a></li>
   <?php } ?>
  <li><a href="shop.php">Store</a></li>
  <li><a href="gallery.php">Gallery</a></li>
   <li><a href="about.php">About</a></li>
  <li><a class="active" href="index.php">Home</a></li>
  <li><img src="este.png" alt="Logo"></li>
</ul>
<header>
   <h1> Poodle Dog Breed</h1>
   <br><br>
   <h2> Poodles are friendly, loving, and playful dogs. They make great companion and family dogs. They manage to be good watchdogs, barking at visitors but almost never aggressive. Poodles are very intelligent and obedient. They are so easy to train and learn fast compared to other breeds. <h2>
   <input type="button" name="Click" value="Read more" onclick="location.href='about4.html';">
   <input type="button" name="click2" value="Pictures" onclick="location.href='gallery.html';">
</header>
<main>
    <img src="hypoallergenic_icon_1.jpg" alt="logo">
    <img src="icon-grooming-200x200.png" alt="logo">
    <img src="gh.png" alt="logo">
    <p class="desc">Poodles have minimally shedding coats and are one of the recommended breeds for allergy sufferers and for people who don't like hairs in the environment.</p>
    <p class="desc">Their coat is really high maintenance. It's important to brush and dry them after bathing to keep their hair soft and tangle-free. They'll need to be taken to the groomers often when their hair grows too long.</p>
    <p class="desc">They fit in any environment as long as they live indoors because they need plenty of human companionship and attention. They are very active and energetic and enjoy outdoor activities.</p>
</main>
<aside>Not the most detailed and trustworthy site of information about poodles.</aside>
<footer>
<p id="copyright">&copy; 2016 Karen Pelayes</p></footer>

</body>
</html>