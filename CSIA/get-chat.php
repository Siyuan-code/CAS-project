<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "data.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM chat 
                LEFT JOIN userinfo ON userinfo.uniqueid = chat.outgoingID
                WHERE (outgoingID = {$outgoing_id} AND incomingID = {$incoming_id}
                ) OR (outgoingID = {$incoming_id} AND incomingID = {$outgoing_id}) ORDER BY msg_id ASC ";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0 ){
            while($row = mysqli_fetch_assoc($query)  ){
                if($row['outgoingID'] === $outgoing_id){
                    $output .= '<div class="chat-outgoing">
                    <div class="details1">
                    <p> '. $row['message'].'</p>
                    </div>
                    </div>';
                }
                else{
                    $output .= '<div class="chat-incoming">
                    <img src="image/'. $row['photo'] . '" alt="">
                    <div class="details1">
                        <p>'. $row['message'].'</p>
                    </div>
                    </div>';
                }
            }
        }
        echo $output;
    }
    else{
        header("../CSIA/loginNew.php");
    }
?>