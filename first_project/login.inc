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

button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  }
  span.psw {
	align:center;
  
  }
  .container {
  padding: 16px;
  }
  p{
  font-size:20px;
  
 
  text-align:center;
  }
  
	</style>
</head>
<body>

  	
	<form id="fr" name="signup" action="login.php" method="post">
	<div class="imgcon">
	<img src="hacker.jpg" alt="hacker" class="avater">
		
		<input type="text" name="user" placeholder="Enter a username" required>
		<input type="text" name="pass" placeholder="Enter a password" required>
		<button type="submit" >Log In</button>
		</div>
		<div class="container" style="background-color:#f1f1f1">
  
    <a href="signup.php"><p>Create new account</p></a>
  </div>
		</form>
</body>
</html>