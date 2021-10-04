<?php

include_once "data.php";
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE NOT uniqueid = {$outgoing_id} AND (username LIKE '%{$searchTerm}%')");
if(mysqli_num_rows($sql) > 0){
    include "searchData.php";
}
else{
    $output .= "No users found in your search";
}
echo $output;

?>