<?php

session_start();
include_once "data.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($username) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE username = '{$username}' 
    AND pwd = '{$password}' ");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['uniqueid'];
            echo "success";

    }
    else{
        echo "username or Password is incorrect";
    }
    
}
else {
    echo "All input fields are required!";
}