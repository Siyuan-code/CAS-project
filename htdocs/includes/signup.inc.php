<?php

if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["passwordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($firstName,$lastName,$email,$username,$pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUserName($username) !== false){
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }
    if(pwdLong($pwd) !== false){
        header("location: ../signup.php?error=pwdLong");
        exit();
    }
    if(userNameExists($conn, $username,$email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createrUser($conn,$firstName,$lastName,$email,$username,$pwd);
}
else{
    header("location: ../signup.php");
    exit();
}