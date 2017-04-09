<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="mysql";
	$dbname="student";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error while connecting to mysql");
	$search=$_GET['p'];
	$query = "SELECT stuName FROM stu_detail WHERE stuName LIKE '$search%';";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		while($d=mysqli_fetch_assoc($result)){
			echo "<p>".$d['stuName']."<br></p>";
		}
	}
	else{
		echo "<p>Nothing matched with query...</p>";
	}
?>