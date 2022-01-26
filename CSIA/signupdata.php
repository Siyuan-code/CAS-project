<?php
    session_start();
    include_once "data.php";
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["password"]);
    $pwdRepeat = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"] );
    $participant = mysqli_real_escape_string($conn, $_POST["participant"]);
    $worker = mysqli_real_escape_string($conn, $_POST["worker"] );
    $grade = mysqli_real_escape_string($conn, $_POST["grade"]);

    if(!empty($username) || !empty($email) || !empty($pwd) || !empty($pwdRepeat) || 
    !empty($gender) || !empty($participant) || !empty($worker)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM userinfo WHERE email = '{$email}'");
            $sql5 = mysqli_query($conn, "SELECT username FROM userinfo WHERE username = '{$username}'");
            if(mysqli_num_rows($sql) > 0 || mysqli_num_rows($sql5) > 0){
                echo "sign up with a different username or email";
            }
            else{
                if(isset($_FILES['photo'], $_FILES['canva'])){
                    $img_name = $_FILES['photo']['name'];
                    $tmp_name = $_FILES['photo']['tmp_name'];
                    $img_name1 = $_FILES['canva']['name'];
                    $tmp_name1 = $_FILES['canva']['tmp_name'];

                    $img_explode = explode('.', $img_name); 
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg'];

                    $img_explode1 = explode('.', $img_name1); 
                    $img_ext1 = end($img_explode1);
                    $extensions1 = ['png', 'jpeg', 'jpg'];

                    if(in_array($img_ext, $extensions) === true && in_array($img_ext1, $extensions1) === true ){
                        $time = time();
                        $time1 = time();
                        $new_img_name = $time.$img_name;
                        $new_img_name1 = $time1.$img_name1;

                        if(move_uploaded_file($tmp_name, "../CSIA/image/".$new_img_name) && 
                        move_uploaded_file($tmp_name1, "../CSIA/canva/".$new_img_name1)){
                            $status = "Active Now";
                            $random_id = rand(time(), 10000000);


                            $sql2 = mysqli_query($conn, "INSERT INTO userinfo (username, email, pwd, gender, participant, 
                            worker, grade, userstatus, uniqueid, photo, canva) 
                            VALUES ('{$username}','{$email}','{$pwd}','{$gender}','{$participant}',
                            '{$worker}','{$grade}','{$status}',{$random_id}, '{$new_img_name}', '{$new_img_name1}');");

                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM userinfo WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['uniqueid'];
                                    echo "success";
                                }
                            }
                            else{
                                echo "Something went wrong!";
                            }
                        }
                        
                    }
                    else{
                        echo "Please select a file with jpg, jpeg, png";
                    }
                }
                else{
                    echo "Please select your profile photo";
                }
            }
        }
        else{
            echo "$email is not valid";
        }
    }
    else{
        echo "Fill in all fields";
    }
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        echo "choose a proper username";
    }
    if($pwd !== $pwdRepeat){
        echo "Passwords do not match";
    }
    if(strlen($pwd) >= 16 || strlen($pwd) <= 8 ){
        echo "Password too long or too short";
    }

?>