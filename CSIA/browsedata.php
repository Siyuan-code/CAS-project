<?php
    session_start(); 
    include_once "data.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE  NOT uniqueid = '{$outgoing_id}' AND participant = 'listener'");
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    }
    elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<div class="container">
        <h2>username : '. $row['username'] .'</h2>
        <h2>type : '. $row['participant'] .'</h2>
        <h2>gender : '. $row['gender'] .'</h2>
        <h2>occupation: '. $row['worker'] .' </h2>
        <button><a href="chat1.php">Start Chat</a></button>
            </div>';
        }
        
    }

    echo $output;

?>