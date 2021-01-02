<?php
setcookie("user","",time()-360000);
							setcookie("pass","",time()-3600000);
							header ('location:login.php');
							
?>