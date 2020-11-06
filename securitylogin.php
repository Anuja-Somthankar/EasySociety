
<!DOCTYPE html>
<html lang="en">
<head>

<link rel = "stylesheet" href = "css/loginstyle.css">
<title>LOGIN</title>
<style>
</style>
</head>
<body>
<div class="split left">
<div class="centered">
<img src="images/apt3logo.jpg" alt="Avatar Men">
</div>
</div>
<div class="split right">
<div class="centered1">
<h1>Security Admin Login</h1><hr>
<form method="post" action="securityloginauthenticate.php" style="margin-top: 40px">

<input type="text" name="username" placeholder="Username.."required>
<input type="password"name="password" placeholder="Password.."required>
<input type="submit" value="Login"required>
	</form>

	<?php
				if(isset($_REQUEST["valid"]) && $_REQUEST["valid"] == "false"){ ?>
				<h5>Wrong Login credentials! Try again</h5>
				<?php }
	?>

<br>
<a href="index.html"><button class = "button"><strong>Back to Last Page</strong></button></a>
	</div>
	
</div>
</body>
</html>