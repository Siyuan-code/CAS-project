<?php
session_start();
include_once "data.php";
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

$output = "";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE NOT uniqueid = '{$outgoing_id}' AND worker='{$searchTerm}' AND participant = 'listener'");


if(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<div class="container">
        <h2>username : '. $row['username'] .'</h2>
        <h2>type : '. $row['participant'] .'</h2>
        <h2>gender : '. $row['gender'] .'</h2>
        <h2>occupation: '. $row['worker'] .' </h2>
        <button><a href="chat1.php">Start Chat</a></button>
            </div>
        ';
    }
}
else{
    $output .= "please type 'student' or 'teacher', If there is no result, that means there is no student or teacher";
}

echo $output;


?>