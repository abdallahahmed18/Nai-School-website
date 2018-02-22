<!DOCTYPE html>
<html>
<head>
	<title>naischool</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
	<script src="bootsrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{text-align:  center}
	</style>
</head>
<body>

	

	 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">NAI School</a>
        
      </div>
      <ul class="nav navbar-nav">
      <li><a href="#" target="-blank">LOGIN PAGE</a></li>
      
      </ul>
    </div>
  </nav>
  <img src="schoolllllll.png" height="200" width="200" >
  <h1>NAI SCHOOL</h1><br><br><br>
  

  <div class="container">
    <div class="">
<form method="GET" >
<fieldset>
  <legend><span style="color:blue;"><h1>Login</h1></span></legend>
  
    Username:<br>
    <input type="text" name="Name">
    <br>
    <br>
        Password:<br>
        <input type="password" name="password"><br>
        <br>
        
        <br>
        <button><a href="naischoolhomepage.php">login</a></button>
        <br>  
        <br>

        
  
  </fieldset>



  

<?php 
     $psd = $_GET['password'];
     if (is_string($psd)) {
      echo "please don't use strings in your password";
     }

 $psd = $_GET['password'];
     if (strlen($psd)<8) {
      echo "password must be at least 8 characters!";
     }
    ?>


</form>

</div>


</body>
</html>