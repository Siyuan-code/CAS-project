<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "data.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE userinfo SET userstatus = '{$status}' WHERE uniqueid = {$logout_id}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../CSIA/loginNew.php");
            }
        }
        else{
            header("location: ../CSIA/loginNew.php");
        }
    }
    else{
            header("location: ../CSIA/loginNew.php");
    }
?>