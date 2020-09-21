<?php
    session_start();
    $_SESSION["first_name"] = $_POST["first_name"];
    echo("On connait votre nom");  
?>