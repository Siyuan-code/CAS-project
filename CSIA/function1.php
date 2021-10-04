<?php

session_start();


function userNameExists($conn, $username, $email){
   $sql = "SELECT * FROM userinfo WHERE username = ? OR email = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../CSIA/signupNew.php?error=stmtfailed");
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

function createrUser($conn,$username,$email,$pwd, $gender, $participant, $worker, $grade, $status,$random_id){
   $sql = "INSERT INTO userinfo (username, email, pwd, gender, participant, worker, grade, userstatus, uniqueid) VALUES (?,?,?,?,?,?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../CSIA/signupNew.php?error=stmtfailed");
        exit();
   }
   
   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"sssssssss", $username,$email,$hashedPwd,$gender, $participant, $worker, $grade,$status,$random_id );
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../CSIA/loginNew.php?error=none");
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
        header("location: ../CSIA/loginNew.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userNameExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
       header("location: ../CSIA/loginNew.php?error=wronglogin");
       exit(); 
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $userNameExists["id"];
        $_SESSION["username"] = $userNameExists["username"];
        $_SESSION["unique_id"] = $userNameExists["uniqueid"];
        header("location: ../CSIA/homeafter.php");
        exit(); 
    }
   


}

