<?php

	if (isset($_POST['name']) && isset($_POST['user']) && isset($_POST['pass']))
	{	
		$name= $_POST['name'];
		$user= $_POST['user'];	
		$pass= $_POST['pass'];
		
		if ($user && $pass && $name)
		{
		
		$host = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bdh";
		$query = "select user from login
					where user='$user'";
		
		$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
		
		$rslt= mysqli_query($conn,$query)
			or die("something went wrong.");
		$row= mysqli_num_rows($rslt);
			
			if ($row>0)
			{
				echo'

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">
	<title>sign up</title>
	<style>
	body{
	background-color:#000;
	color:#fff;
	
		}
		form{	
		border:3px solid #f1f1f1;
		}
		input{
		width:100%;
		border:1px solid #ccc;
		padding:12px 20px;
		display:inline-block;
		margin:8px 0px;
		box-sizing: border-box
		}
		.imgcon{
		text-align:center;
		margin:24px 12px 0px;
		}
		img.avater{
		width:60%;
		border-radius:30%;
		}
			button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
a{
text-decoration:none;
color:#fff;
}

button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  }
  span.psw {
  display:block;
  margin-right:8px;
  
  }
  .la{
  float:left;
  color:red;
  }
	  
	</style>
</head>
<body>
<button type="button" class="cancelbtn" style="float:right; margin-bottom:30px;"><a href="login.php">Log In</a></button></span>
<h2>Create new account</h2>
	
  	
	<form id="fr" name="signup" action="signup.php" method="post">
	<div class="imgcon">
	<img src="hacker.jpg" alt="hacker" class="avater">
	<label for="name" class="la"> Username exist, please enter another username.</label>
		<input type="text" name="name" placeholder="Enter your name" required>
		<input type="text" name="user" placeholder="Enter a username" required>
		<input type="text" name="pass" placeholder="Enter a password" required>
		<button type="submit" >Create account</button>
		</div>
		
		
</body>
</html>';
				}
				
			else
			{
				
				$add = "INSERT INTO login (user, pass, name)
						VALUES ('$user','$pass','$name')";
						
				$addquery= mysqli_query($conn,$add)
						or die ("");
						
				$table_create="CREATE TABLE $user (
						mobile	VARCHAR(30),
				password	VARCHAR(30))";
						
				$createquery=mysqli_query($conn,$table_create)
							or die ("");
							setcookie("user","$user",time()+60);
							setcookie("pass","$pass",time()+60);
							header ('location:home.php');
	}}}
	else if (isset($_POST['name']) or isset($_POST['user']) or isset($_POST['pass']))
	{
		echo"f";
	}




else{
	echo'

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">
	<title>sign up</title>
	<style>
	body{
	background-color:#000;
	color:#fff;
	
		}
		form{	
		border:3px solid #f1f1f1;
		}
		input{
		width:100%;
		border:1px solid #ccc;
		padding:12px 20px;
		display:inline-block;
		margin:8px 0px;
		box-sizing: border-box
		}
		.imgcon{
		text-align:center;
		margin:24px 12px 0px;
		}
		img.avater{
		width:60%;
		border-radius:30%;
		}
			button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
a{
text-decoration:none;
color:#fff;
}

button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  }
  span.psw {
  display:block;
  margin-right:8px;
  
  }
	</style>
</head>
<body>
<button type="button" class="cancelbtn" style="float:right; margin-bottom:30px;"><a href="login.php">Log In</a></button></span>
<h2>Create new account</h2>
	
  	
	<form id="fr" name="signup" action="signup.php" method="post">
	<div class="imgcon">
	<img src="hacker.jpg" alt="hacker" class="avater">
		<input type="text" name="name" placeholder="Enter your name" required>
		<input type="text" name="user" placeholder="Enter a username" required>
		<input type="text" name="pass" placeholder="Enter a password" required>
		<button type="submit" >Create account</button>
		</div>
		
		
</body>
</html>';
}
?>