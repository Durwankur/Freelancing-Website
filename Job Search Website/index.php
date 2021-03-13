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
<html>
<head>
	<title>Home</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
      <?php endif ?>
      


    <!-- HOme page -->
    <div class="navbar">
    <a href="index.php"><img class="logo" src="img\logo.png"></a>
    <a href="index.php" style="border-bottom:3px orange solid;">Home</a>
    <a href="gallery.php">More Jobs</a>
    <a href="about.html">About Us</a>
	<a href="contact.php">Post Ad</a>
	<a href="jobs.php">Jobs</a>
	<a href="index.php?logout='1'" style="color: orange;">Logout</a>
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding:5px;color:orange;font-family:verdana;margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 
    <?php endif ?>
    
</div>

<!-- Slider -->
<div class="slideshow">
	<div class="slider-wrapper">
		<img src="img\andriod.png" class="slide" alt="Slide 1">
		<img src="img\java.png" class="slide" alt="Slide 2">
		<img src="img\python.jpg" class="slide" alt="Slide 3">
	</div>
</div>   
<br/>
<br/>

<div class="mid-body">
	<div class="mid left">
	<img src="img\info-img.jpg" class="info-img">
	</div>
	
	<div class="mid right">
	<h1>What we do?</h1>
	<p>  "We Recruit Developers.<br> Got Skill? You are Hired!"</p>
	<br>
	<button class="button">Read More</button>
	</div>
</div>
<br/>
<br/>

<!-- Qualities -->

<div class="row">
  <div class="column" style="background-color:#aaa;">
   <a href="python.php"> <img src="img\python.jpg"></a>
	<h2>Python Jobs !!!</h2>
  </div>
  <div class="column" style="background-color:#bbb;">
  <a href="java.php"> <img src="img\java.png"></a>
	<h2>Java Jobs !!!</h2>
  </div>
  <div class="column" style="background-color:#ccc;">
  <a href="android.php"><img src="img\andriod.png"></a>
	<h2>Andriod Jobs !!!</h2>
  </div>
</div>
<br/>
<br/>

<!-- Footer -->

<div class="footer">
<br>
	<i class="fa fa-facebook"></i><span> | </span>
	<i class="fa fa-twitter"></i> <span> | </span>
	<i class="fa fa-instagram"></i> <span> | </span>
	<br>
	© Copyright 2019-20
</div>





    

		
</body>
</html>