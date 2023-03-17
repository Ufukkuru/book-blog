<?php

    $host ="localhost";
    $db_name ="blog_db";
    $username ="root";
    $password="";

    $mysqli = new mysqli(
    hostname: $host,
    database: $db_name,
    username: $username,
    password: $password);

    if($mysqli->connect_errno){
        die("Connection error: ". $mysqli->connect_error);
    }

    return $mysqli;