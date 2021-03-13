
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

$db = mysqli_connect('localhost', 'root', '', 'login');


?> 

<!DOCTYPE html>
<html>
<head>
	<title>Jobs - Home</title>
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

<div class="job" style="color:orange;opacity:0.8;text-align:center;"> 
<?php
$query = "SELECT * from company;" ;
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)) {
   
    echo "<p>Company name: ".$row["cname"]."</p>" ;
    echo "<p>Company Email: ".$row["email"]."</p>" ;
    echo "<p>Language required: ".$row["cjob"]."</p>" ;
    echo "<button>Apply</button>";
    echo "<br/><br/><br/>";
}


?>
</div>


</body>
</html>

