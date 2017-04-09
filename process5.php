
<!DOCTYPE html>
<html>
<head>
	<title>Student Detail</title>
	<link rel="stylesheet" href="frmstyle.css" type="text/css">
	<style>
		 @import url('https://fonts.googleapis.com/css?family=Baloo+Bhaina'); 
		 @import url('https://fonts.googleapis.com/css?family=Baloo+Bhaina|Exo');
	</style>
</head>
<body background="wallpaper-for-hd-7.jpg" background-position="right center">
	<div class="header">
		<div class="header">
			<div>Student<span>Details</span></div>
			<?php 
				$name=$_REQUEST["fname"];
				$email=$_REQUEST["email"];
				$mob=$_REQUEST["mob"];
				$pwd=$_REQUEST["pwd"];
				$date=$_REQUEST["date1"];
				$city=$_REQUEST["city1"];
				$gender=$_REQUEST["gender"];
				$certificate=$_REQUEST["certificate"];
				for($i=0;$i<count($certificate);$i++){
					$cert=$cert.",".$certificate[$i];
				}				
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="mysql";
				$dbname="student";

				$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error while connecting to mysql");

				$query = "INSERT INTO stu_detail (stuName, stuEmail, stuMobile, stuPassword, stuDob, stuCity, stuGender, stuCertificate)  VALUES ('$name','$email','$mob','$pwd','$date','$city','$gender[0]','$cert');";
	
				mysqli_query($conn, $query) or die("Error while saving data !");
				echo "<center><p>You have successfully registered!<br>Name: $name<br> Email: $email<br> Mobile Number: $mob</p></center>";
				mysqli_close($conn);	
			?>
		</div>
	</div>
</body>
</html>