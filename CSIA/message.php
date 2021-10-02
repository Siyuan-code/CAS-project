<?php

function emptyInputMessage($message){
    $result;
    if(empty($message)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function SendMessage($conn,$message){
   $sql = "INSERT INTO chat (Sender,receiver,messages) VALUES (?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../CSIA/chat.php?error=stmtfailed");
        exit();
   }
   
   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"sss",$message);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../CSIA/chat.php?error=none");
   exit();
}
?>