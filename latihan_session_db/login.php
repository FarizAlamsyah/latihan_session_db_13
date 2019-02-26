<?php

session_start();
	
	if(isset($_SESSION['message'])){
		if($_SESSION['message']!=""){
			echo "<span 
			style= 'color: red'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="csslogin.css">
</head> 
<body>
	<center>
	<div class="bb">
	<div id="out">
	<div id="in">

		<h2>SIGN IN</h2>
	</div>

	<form method="POST" action="ceklogin.php">		
				<input class="username" placeholder="Username" type="text" name="username" required>			
				<input class="password" placeholder="Password" type="password" name="password" required>
				<button id="button" type="submit" name="login">Sign In</button>
	</form>
	<div class="link">
	<ul>
		<p>Don't Have an Account ??</p>
		<a href="register.php">REGISTER</a>
	</ul>
	</div>
	</div>
</div>
</center>
</body>
</html>