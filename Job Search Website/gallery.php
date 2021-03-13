<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?> 
<!DOCTYPE html>
<html><head>
<title>More Jobs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<!-- HOme page -->
<div class="navbar">
    <a href="index.php"><img class="logo" src="img\logo.png"></a>
    <a href="index.php" >Home</a>
    <a href="gallery.php" style="border-bottom:3px orange solid;">More Jobs</a>
    <a href="about.php">About Us</a>
	<a href="contact.php">Post Ad</a>
	<a href="jobs.php">Jobs</a>
	<a href="index.php?logout='1'" style="color: orange;">Logout</a>
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding:5px;color:orange;font-family:verdana;margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 
    <?php endif ?>
    
</div>
<!-- Gallery -->

<div class="gallery_header">
<h1>More for you to choose!</h1>
</div>

<br/>
<br/>

<div class="gallery-page">
<div class="gallery">
  <a target="_blank" href="java.php">
    <img src="img\java.png" alt="food" width="600" height="400">
  </a>
  <div class="desc">Java</div>
</div>
<div class="gallery">
  <a target="_blank" href="android.php">
    <img src="img\andriod.png" alt="food" width="600" height="400">
  </a>
  <div class="desc">Android</div>
</div>
<div class="gallery">
  <a target="_blank" href="python.php">
    <img src="img\python.jpg" alt="food" width="600" height="400">
  </a>
  <div class="desc">Python</div>
</div>
<div class="gallery">
  <a target="_blank" href="python.php">
    <img src="img\python.jpg" alt="food" width="600" height="400">
  </a>
  <div class="desc">Ruby</div>
</div>
<div class="gallery">
  <a target="_blank" href="java.php">
    <img src="img\java.png" alt="food" width="600" height="400">
  </a>
  <div class="desc">Pearl</div>
</div>
<div class="gallery">
  <a target="_blank" href="android.php">
    <img src="img\andriod.png" alt="food" width="600" height="400">
  </a>
  <div class="desc">JavaScript/JQuery</div>
</div>
<div class="gallery">
  <a target="_blank" href="img\slider1.jpg">
    <img src="img\slider1.jpg" alt="food" width="600" height="400">
  </a>
  <div class="desc">Food 7</div>
</div>
<div class="gallery">
  <a target="_blank" href="img\slider1.jpg">
    <img src="img\slider1.jpg" alt="food" width="600" height="400">
  </a>
  <div class="desc">Food 8</div>
</div>
<div class="gallery">
  <a target="_blank" href="img\slider1.jpg">
    <img src="img\slider1.jpg" alt="food" width="600" height="400">
  </a>
  <div class="desc">Food 9</div>
</div>

</div>
<br/>


<!-- Footer -->

<div class="footer">
<br/>
	<i class="fa fa-facebook"></i><span> | </span>
	<i class="fa fa-twitter"></i> <span> | </span>
	<i class="fa fa-instagram"></i> <span> | </span>
	<br/>
	© Copyright 2019-20
</div>


</body>
</html>