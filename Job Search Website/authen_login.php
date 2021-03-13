<?php  
 require('db_connect.php');

 session_start();
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$Username = $_POST['user_id'];
$Password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$Username' and Password='$Password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";


}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header('location:login.html');
//echo "Invalid Login Credentials";

}
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

<!-- Navigation Bar -->
<div class="navbar">
    <a href="index.html"><img class="logo" src="img\logo.png"></a>
    <a href="index.html">Home</a>
    <a href="gallery.html">Gallery</a>
    <a href="about.html">About Us</a>
    <a href="contact.html">Contact Us</a>
	<a href="logout.php">Logout</a>
    <h4 style="color:orange; margin-left:20px;font-family:verdana;font-size:20px;"><?php echo "Hello " . $_POST["user_id"]; ?> </h4>
    
</div>

<!-- Slider -->
<div class="slideshow">
	<div class="slider-wrapper">
		<img src="img\slider1.jpg" class="slide" alt="Slide 1">
		<img src="img\slider1.jpg" class="slide" alt="Slide 2">
		<img src="img\slider1.jpg" class="slide" alt="Slide 3">
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
	<p>  "We deliver the best food.<br> Service in 100+ cities across India."</p>
	<br>
	<button class="button">Read More</button>
	</div>
</div>
<br/>
<br/>

<!-- Qualities -->

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <img src="img\slider1.jpg">
	<h2>We deliver FAST !!!</h2>
  </div>
  <div class="column" style="background-color:#bbb;">
    <img src="img\slider1.jpg">
	<h2>We deliver HOT !!!</h2>
  </div>
  <div class="column" style="background-color:#ccc;">
    <img src="img\slider1.jpg">
	<h2>We deliver FRESH !!!</h2>
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









</body></html>