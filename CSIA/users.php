<?php
    session_start(); 
    include_once "data.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE NOT uniqueid = {$outgoing_id}");
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    }
    elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            include "searchData.php";
        }
    }

    echo $output;

?>