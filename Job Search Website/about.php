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
    <a href="about.php" style="border-bottom:3px orange solid;">About Us</a>
	<a href="contact.php">Post Ad</a>
	<a href="jobs.php">Jobs</a>
	<a href="index.php?logout='1'" style="color: orange;">Logout</a>
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding:5px;color:orange;font-family:verdana;margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 
    <?php endif ?>
    
</div>>


<!-- Uppper About -->

<div class="gallery_header">
	<h1>About Us</h1>
	
	<p>We deliver fresh food to your doorstep! DOnt be hungry. Order food and get it within 1 hour. </p>
</div>
<br/>
<br/>

<div class="team">
	<table>
		<tr>
			<td><img src="img\slider1.jpg"></td>
			<td>CEO FOODS Cooperation</td>
		</tr>
	</table>

<!-- Footer -->

<div class="footer">
<br>
	<i class="fa fa-facebook"></i><span> | </span>
	<i class="fa fa-twitter"></i> <span> | </span>
	<i class="fa fa-instagram"></i> <span> | </span>
	<br>
	© Copyright 2019-20
</div>









</body></html>