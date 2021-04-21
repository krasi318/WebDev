<?php session_start();?>
<!DOCTYPE hmtl>
<html>
	<head>
		<title>
			Home page
		</title>
	</head>
	<body>
		<h1>Home page</h1>
		<?php 
			var_dump($_SESSION);
			if(isset($_SESSION['firstName']) && isset($_SESSION['lastName'])){
				echo '<p> Hi, '. $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] . '</p>';
				echo '<a href="http://localhost/Project174/logoutProcces.php">logout</a>';
			}
			
			if(!isset($_SESSION['firstName']) && !isset($_SESSION['lastName'])){
				echo '<a href="http://localhost/Project174/registerPage.php">Register</a>';
				echo '<br>';
				echo '<a href="http://localhost/Project174/loginPage.php">Login</a>';
				echo '<br>';
				echo '<a href="http://localhost/Project174/showUsers.php">Show users</a>';
				echo '<br>';
			}
		?>
	</body>
</html>