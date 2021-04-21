<?php
	//var_dump($_GET);
	
	$firstName = $_GET["firstName"];
	$lastName = $_GET["lastName"];
	$email = $_GET["email"];
	$phoneNumber = $_GET["phoneNumber"];
	$password = $_GET["password"];
	$comfimPassword = $_GET["comfimPassword"];
    $egn = $_GET["egn"];

	//validate date
	
	if($firstName == "" || $lastName == "" || $email == "" || $phoneNumber == "" || $comfimPassword == "" || $password == "" || $egn == "" ){
		header("Location: http://localhost/Project174/test1.php");
        die();
	}
	
	if($password != $comfimPassword){
		header("Location: http://localhost/Project174/test2.php");
        die();
	}
    if($egn != "1234567890" ){
        header("Location: http://localhost/Project174/test3.php");
        die();
    }

	try {
		require('dbConnect.php');
		$query = "INSERT INTO users (firstName,lastName,email,pass,phoneNumber,egn) 
		VALUES (:firstName,:lastName,:email,:pass,:phoneNumber,:egn)";

		$stm = $db->prepare($query); 
		$stm->bindParam(':firstName',$firstName );
		$stm->bindParam(':lastName',$lastName );
		$stm->bindParam(':phoneNumber',$phoneNumber );
		$stm->bindParam(':email',$email);
		$stm->bindParam(':pass',$password );	
        $stm->bindParam(':egn',$egn);
		$stm->execute();
		
		header("Location: http://localhost/Project174/loginPage.php");
        die();
		
	} catch(PDOException $e) {
		echo $e->getMessage();  
	}
	
?>