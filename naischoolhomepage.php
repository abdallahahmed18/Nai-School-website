<!DOCTYPE html>
<html>
<head>
	<title> home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstap.min.js"></script>
	<style type="text/css">
		h1{text-align: center;}
		h3{text-align: center;}
		body{text-align: center;font-size: 20px}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">NAI School</a>
        
      </div>
      <ul class="nav navbar-nav">
      <li><a href="#" target="-blank">Home</a></li>
      
      </ul>
    </div>
  </nav><br><br>
  <img src="schoolllllll.png" height="200" width="200" >
  <h1>NAI SCHOOL</h1><br><br><br>
  
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<h3><u>SCHOOL VISION</u></h3>
					<p>To nature an exemplary and successful person in the upcoming cuontry economy and nation development.</p>
					
				</div>
				<div class="col-sm-4">
					<h3><u>SCHOOL MISSION</u></h3>
					<p>To provide and ensure that all students are provided with teachers and raw materials for learning purposes.</p>
					
				</div>
				<div class="col-sm-4">
					<h3><u>SCHOOL MOTO</u></h3>
					<p>Discipline and hardwork are the keys to success</p>
					
				</div>
				
			</div><br><br><br>
			<h2>ENTER STUDENT'S MARKS BELOW</h2>
			
	 
			<form method="GET">

				MATHS      :<br> <input type="number" name="MATHS"> <br>
				ENGLISH    : <br><input type="number" name="ENGLISH"> <br>
				KISWAHILI  : <br><input type="number" name="KISWAHILI"> <br>
				BIOLOGY    : <br><input type="number" name="BIOLOGY"> <br>
				CHEMISTRY  : <br><input type="number" name="CHEMISTRY"> <br>
				PHYSICS    : <br><input type="number" name="PHYSICS"> <br>
				GEOGRAPHY  : <br><input type="number" name="GEOGRAPHY"> <br>
				COMPUTER   : <br><input type="number" name="COMPUTER"> <br>
			
             
            <button type="submit" class="btn-success">SUBMIT</button>
  	<button type="reset" class="btn-danger">RESET</button>
        
			</form>

			
		
	<br>
	<?php 

	$eng=$_GET["ENGLISH"];
	$mat=$_GET["MATHS"];
	$kis=$_GET["KISWAHILI"];
	$bio=$_GET["BIOLOGY"];
	$chem=$_GET["CHEMISTRY"];
	$phy=$_GET["PHYSICS"];
	$geo=$_GET["GEOGRAPHY"];
	$comp=$_GET["COMPUTER"];


    $average=($eng+$mat+$kis+$bio+$chem+$chem+$phy+$geo+$comp)/8;
    echo $average;
    echo "<br>";
	 
	 if ($average>=80) {
	 	# code...
	 	echo "You have an A";
	 } elseif ($average>=75) {
	 	# code...
	 	echo "A-";
	 } elseif ($average>=70) {
	 	# code...
	 	echo "B+";
	 }elseif ($average>=65) {
	 	# code...
	 	echo "B";
	 } elseif ($average>=60) {
	 	# code...
	 	echo "B-";
	 } elseif ($average>=55) {
	 	# code...
	 	echo "C+";
	 }elseif ($average>=50) {
	 	# code...
	 	echo "C";
	 }elseif ($average>=45) {
	 	# code...
	 	echo "D+";
	 }elseif ($average>=40) {
	 	# code...
	 	echo "D";
	 }elseif ($average>=35) {
	 	# code...
	 	echo "D-";
	 }else{
	 	# code...
	 	echo "E";
	 }

	 ?>	
	 </div>
		
	</div>


	 
	 			
	

</body>
</html>