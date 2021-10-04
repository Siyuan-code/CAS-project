<?php
while($row = mysqli_fetch_assoc($sql)){
    $sql2 = "SELECT * FROM chat WHERE (incomingID = {$row['uniqueid']} 
        OR outgoingID = {$row['uniqueid']}) AND (outgoingID = {$outgoing_id} 
        OR outgoingID = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){
        $result = $row2['message'];
    }
    else{
        $result = "No messages";
    }

    // trimming message if word are more than 28 characters
    (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...': $msg = $result;
    ($outgoing_id == $row2['outgoingID']) ? $you = "You: " : $you = "";
    //check if user is online or offline
    ($row['userstatus'] == "Offline now") ? $offline = 'offline' : $offline = '';

    $output .= ' <a href="chat1.php?user_id='. $row['uniqueid'] .'">
    <div class="content">
    <div class="details">
    <img src="image/'. $row['photo'] . '" alt="">
        <span>'. $row['username'] .'</span>
        <p>'.$you . $msg .'</p>
    </div>
    </div>
    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
</a>
';
}

?>