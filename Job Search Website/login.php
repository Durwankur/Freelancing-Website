<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css\loginpage.css">
</head>
<body>
  <div class="header">
  	<h1>Login</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="login_box">
  		<label for="username">Username</label>
  		<input type="text" name="username" >
	<br/>
  	
  		<label for="password">Password </label>
  		<input type="password" name="password">
  		<br/>
		  
<br/>
		  Not yet a member? <a href="register.php">Sign up</a>
<br/><br/>
<br/>
		  <button type="submit" class="btn" name="login_user">Login</button>
	  </div>
  </form>
  
		 
</body>
</html>