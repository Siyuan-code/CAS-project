<?php

function emptyInputSignup($username,$email,$pwd,$pwdRepeat,$grade, $participant, $worker, $gender){
    $result;
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat) || 
    empty($grade) || empty($participant) || empty($worker) || empty($gender)){
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

function pwdLength($pwd){
    $result;
    if(strlen($pwd) >= 16 || strlen($pwd) <= 8){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function userNameExists($conn, $username, $email){
   $sql = "SELECT * FROM userinfo WHERE username = ? OR email = ?;";
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

function createrUser($conn,$username,$email,$pwd,$gender,$participant,$worker,$grade){
   $sql = "INSERT INTO userinfo (userName, email, pwd, gender, participant, worker, grade) VALUES (?,?,?,?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../CSIA/signup.php?error=stmtfailed");
        exit();
   }
   
   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"sssssss", $username,$email,$hashedPwd,$gender,$participant,$worker, $grade);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../CSIA/signup.php?error=none");
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
        header("location: ../CSIA/logins.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userNameExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
       header("location: ../CSIA/logins.php?error=wronglogin");
       exit(); 
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $userNameExists["userId"];
        $_SESSION["username"] = $userNameExists["userName"];
        header("location: ../CSIA/home.php");
        exit(); 
    }


}












?>