<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "Madhu47215");
    define('DB_NAME', 'blog');


    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if($con->connect_error){
        die("Database Connection Failed. => " . $con->connect_error);
    }
    

?>