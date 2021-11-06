<?php

if (isset($_POST["submit"])) {

    $name = $_POST["fullname"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // controlli
    // controllo per input vuoti 
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header('location: ../signup.php?error=emptyinput');
        exit();
    };


    // controlli per input non validi (uid)
    if (invalidUid($username) !== false) {
        header('location: ../signup.php?error=invaliduid');
        exit();
    }


    // controlli per input non validi (email)
    if (invalidEmail($email) !== false) {
        header('location: ../signup.php?error=invalidemail');
        exit();
    }


    // controlli per input non validi perche diversi (pwd)
    if (pwdCheck($pwd, $pwdRepeat) !== false) {
        header('location: ../signup.php?error=pwddoesntmatch');
        exit();
    }

    // contolli uid gia esistente
    if (uidExists($conn, $username, $email) !== false) {
        header('location: ../signup.php?error=usernametaken');
        exit();
    } 
        
    createUser($conn, $name, $email, $username, $pwd);
}else {
    header('location: ../login.php');
    exit();
}