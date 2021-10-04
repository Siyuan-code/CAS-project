<?php
    session_start(); 
    include_once "data.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE participant = 'listener'");
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .= "No listener are available";
    }
    elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '
            <div class="container">
            <h2> '. $row['username'] . '</h2>
            <h2>' . $row["participant"] . '</h2>
            <h2>grade: '. $row["grade"] . '</h2>
            <h2>gender: '. $row["gender"] . '</h2>
            </div>
        ';
        }
    }

    echo $output;

?>