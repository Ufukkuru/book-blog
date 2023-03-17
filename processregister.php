<?php

    if (empty($_POST["name"])){
        die("Name is required");
    }

    if (empty($_POST["surname"])){
        die("Surname is required");
    }

    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Valid email is required");
    }

    if(strlen($_POST["password"]) < 8){
        die("Password must be at least 8 characters");
    }

    if( ! preg_match("/[a-z]/i", $_POST["password"])){
        die("Password must contain at least one letter");
    }

    if (empty($_POST["dateofbirth"])){
        die("date of birth is required");
    }

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO user ( name, surname , email, password_hash ,dateofbirth) VALUES (?,?,?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)){
        die("SQL error :".$mysqli->error);
    }
    
    $stmt->bind_param("sssss",
    $_POST["name"],
    $_POST["surname"],
    $_POST["email"],
    $password_hash,
    $_POST["dateofbirth"]);

    if($stmt->execute()){
        header("Location: login.php");
        exit;
    }

    else{
        if($mysqli->errno === 1062){
            die("Email already taken");
        }
    else{
        die($mysqli->error . " " . $mysqli->errno);
    }
    }


?>