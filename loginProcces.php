<?php
    session_start();
    $email = $_GET['email'];
    $pass = $_GET['password'];

    try{
        require('dbConnect.php'); 
        $query = "SELECT * FROM users WHERE email = :email AND pass = :pass";
        $stm = $db->prepare($query);
        $stm->bindParam(':email',$email);
        $stm->bindParam(':pass',$pass);
        $stm->execute();
        $data = $stm->fetchAll();
        
        if(count($data) != 0){
            $firstName = $data[0]['firstName'];
            $lastName = $data[0]['lastName'];
            $_SESSION['firstName'] = $firstName;
            $_SESSION['lastName'] = $lastName;
            
            header("Location: http://localhost/Project174/homePage.php");
        }else{
            $_SESSION['loginError'] = "Email or password are wrong";
            header("Location: http://localhost/Project174/loginPage.php");
        }

    }catch(Exception $e){
        echo $e->getMessage();
    }