<?php 
	$name=$_REQUEST["fname"];
	$email=$_REQUEST["email"];
	$mob=$_REQUEST["mob"];
	$pwd=$_REQUEST["pwd"];
	$date1=$_REQUEST["date1"];
	$city1=$_REQUEST["city1"];
	$gender=$_REQUEST["gender"];

	echo "<center><h1>Student Record</h1></center>";

	echo "Name: ".$name."<br>Email: ".$email."<br>Mobile Number: ".$mob."<br>Date of Birth: ".$date1."<br>City: ".$city1."<br>Gender: ".$gender;

	echo "<br>Certifications: ";

	foreach($_REQUEST['certificate'] as $selected){
		echo $selected."<br>";
	}

?>