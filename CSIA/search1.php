<?php
session_start();
include_once "data.php";
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE NOT uniqueid = '{$outgoing_id}' AND username LIKE '%{$searchTerm}%'");

if(mysqli_num_rows($sql) > 0){
    include "searchData.php";
}
else{
    $output .= "No users found in your search term";
}

echo $output;

?>