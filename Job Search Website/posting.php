<?php
session_start();

// initializing variables
$companyname = "";
$email    = "";
$lang ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $companyname = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $lang = mysqli_real_escape_string($db, $_POST['lang']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($companyname)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($lang)) { array_push($errors, "Password is required"); }
  

  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO company (cname, email, cjob) 
  			  VALUES('$companyname', '$email', '$lang')";
  	mysqli_query($db, $query);
      
    
  	
  }
}


  
  ?>

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Post an Ad</title>
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
    <a href="index.php" >Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="about.php">About Us</a>
	<a href="contact.php">Post Ad</a>
	<a href="jobs.php" style="border-bottom:3px orange solid;">Jobs</a>
	<a href="index.php?logout='1'" style="color: orange;">Logout</a>
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="padding:5px;color:orange;font-family:verdana;margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 
    <?php endif ?>
    
</div>

<div style="color:orange; font-family:verdana;text-align:center;">
    <h2>Your advertisement has been Posted. We will find a client for you Soon! </h2>
    <br/>
    <p>Click <a href="index.php" style="color:red;">here</a> to go back to home page.</p>
</div>

