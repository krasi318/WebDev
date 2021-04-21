<?php session_start()?>
<!DOCTYPE hmtl>
<html>
	<head>
		<title>
			Login
		</title>
		<link rel="stylesheet" href="css/forms.css">
		<style>
			p{
				color: red;
				border: 1px solid red;
			}
		</style>
	</head>
	<body>
		<h1>Login page</h1>
		<div>
			<?php
				if(isset($_SESSION['loginError'])){
					echo '<p>'. $_SESSION['loginError'] . '</p>';
					unset($_SESSION['loginError']);
				}
			?>
			<form action = "http://localhost/Project174/loginProcces.php">
				<label for = "email">Email:</label>
				<input id = "email" type = "text" name = "email">
				<br>
				<label for = "password">Password:</label>
				<input id = "password" type = "password" name = "password">
				<input type = "submit" value = "Login">
			</form>
		</div>
	</body>
</html>