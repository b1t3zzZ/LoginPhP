<?php

require_once("db.php");

$login = $_POST["login"];
$pass = $_POST["pass"];
$repeatpass = $_POST["repeatpass"];

if (empty( $login ) || empty( $pass ))
{
    require 'indexwhenempty.php';
}
else
{
    // Get user from db with $login
    $sqlident = "SELECT * FROM `users` WHERE login = 'login'";
    $result = $conn ->query( $sqlident );

    if ($pass !=$repeatpass)
    {
        require 'indexwhendiffpass.php';
    }
    
    // elseif -> something found in db
    elseif ($login == $result)
    {
        require 'indexwhenwhologin.php';
        exit;
    }   
    else
    {
        $sql = "INSERT INTO `users` (login, pass) VALUES ('$login', '$pass')";
        if($conn->query($sql) === TRUE)
        {
            require 'indexwhencreate.php';
        }
        else
        {
            require 'indexwhenerror.php';
        }
    }
}
?>