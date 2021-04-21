<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>
		<link rel="stylesheet" href="css/forms.css">
	</head>
	<body> 
        <center><h1>Register</h1></center>
        <center><P>Hello welcome to my website here you can register :</P></center>
		<div>
			<form action = "http://localhost/Project174/registerProcces.php">
				<center><label for = "fname">First Name:</label>
				<input id = "fname" type = "text" name = "firstName" required></center>
				<br>
				<center><label for = "lname">Last Name:</label>
				<input id = "lname" type = "text" name = "lastName"></center>
				<br>
				<center><label for = "email">Email:</label>
                <input id = "email" type = "text" name = "email"></center>
				<br>
				<center><label for = "pnumber">Phone number:</label>
				<input id = "pnumber" type = "text" name = "phoneNumber"></center>
				<br>
				<center><label for = "password">Password:</label>
				<input id = "password" type = "password" name = "password"></center>
				<br>
				<center><label for = "cpassword">Comfim password:</label>
				<input id = "cpassword" type = "password" name = "comfimPassword"></center>
				<br>
                <center><label for = "egn">EGN:</label>
				<input id = "egn" type = "text" name = "egn"></center>
				<br>
				<center><input type = "submit" value = "Register"></center>
			</form>
		</div>
        <marquee scrollamount="12"><h2><font size ="20">All rights reserved!</font></h2></marquee>
        <footer> ! All rights reserved ! 174-13 ! All rights reserved ! </footer>
	</body>
</html>
