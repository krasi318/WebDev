<?php
    session_start();
    unset($_SESSION['firstName']);
    unset($_SESSION['lastName']);
    header("Location: http://localhost/Project174/homePage.php");
?>