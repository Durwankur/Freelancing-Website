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
<title>Home</title>
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
    <a href="gallery.php">Gallery</a>
    <a href="about.php">About Us</a>
	<a href="contact.php" style="border-bottom:3px orange solid;">Post Ad</a>
	<a href="jobs.php" >Jobs</a>
	<a href="index.php?logout='1'" style="color: orange;">Logout</a>
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding:5px;color:orange;font-family:verdana;margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 
    <?php endif ?>
    
</div>

<br/>
<br/>


<div class="map">
	<div class="map_img">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60271.345226072546!2d73.09512979315174!3d19.240615208510473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be796f457b1b76f%3A0x35df463ca445bd26!2sKalyan%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1562333581951!5m2!1sen!2sin" 
	 frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="map_add">
	<address><h1>Street addresses:</h1> <br/>445 Mount Eden Road,<br/> Mount Eden,<br/> Auckland</address>
</div>
</div>
<br/>
<br/>
<div class="location">
	<form action="posting.php" method="post">
	Company Name:<br/><input type="text" placeholder="Enter Company Name" name="name" required> <br/><br/>
	Email:<br/><input type="text" placeholder="Enter Email" name="email" required> <br/><br/>
	Language needed:<br/><input type="text" placeholder="C, C++, Java" name="lang" required> <br/><br/>
	<button type="submit" class="button" name="reg_user">Post</button>
					 <br/>
	
	</form>
	
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