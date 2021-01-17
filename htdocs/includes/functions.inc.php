<?php

function emptyInputSignup($firstName,$lastName,$email,$username,$pwd,$pwdRepeat){
    $result;
    if(empty($firstName) || empty($lastName) || empty($email) || empty($username) || 
    empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUserName($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdLong($pwd){
    $result;
    if(strlen($pwd) >= 16){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function userNameExists($conn, $username, $email){
   $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   
   mysqli_stmt_bind_param($stmt,"ss", $username, $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);
   if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
   }
   else{
       $result = false;
       return $result;
   }

   mysqli_stmt_close($stmt);
}

function createrUser($conn,$firstName,$lastName,$email,$username,$pwd){
   $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userName, userPassword) VALUES (?,?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   
   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"sssss", $firstName,$lastName,$email,$username,$hashedPwd );
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../homepage.php?error=none");
   exit();
}

function emptyInputLogin($username,$pwd){
    $result;
    if(empty($username)|| empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn,$username, $pwd){
    $userNameExists = userNameExists($conn, $username, $username); 

    if($userNameExists === false){
        header("location: ../logins.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userNameExists["userPassword"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
       header("location: ../logins.php?error=wronglogin");
       exit(); 
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $userNameExists["userId"];
        $_SESSION["username"] = $userNameExists["userName"];
        header("location: ../home.php");
        exit(); 
    }
   


}