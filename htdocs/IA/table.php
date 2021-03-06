<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$grade = $_POST['grades']; 

require_once 'link.php';

if(emptyInputSignup($name,$email,$subject,$grade) !== false){
        header("location: ../IA/table.php?error=emptyinput");
        exit();
    }

if(invalidEmail($email) !== false){
        header("location: ../IA/table.php?error=invalidemail");
        exit();
    }
RecordStudent($conn, $name, $email,$subject, $grade);
}


function emptyInputSignup($name,$email,$subject,$grade){
    $result;
    if(empty($name) || empty($email) || empty($subject) || empty($grade)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function RecordStudent($conn,$name,$email,$subject,$grade){
   $sql = "INSERT INTO studentinfo (names, email, EE_subject, grade) VALUES (?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../IA/table.php?error=stmtfailed");
        exit();
   }
   mysqli_stmt_bind_param($stmt,"ssss", $name,$email,$subject,$grade);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../IA/table.php?error=none");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini IA</title>
    <link rel="stylesheet" href="table.css?rnd=1">
</head>
<body>

    <h1 class="heading">Enter your information here</h1>    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name" class="label">Name:</label>
        <input type="text" name="name" class="name">
        <label for="name" class="label">Email:</label>
        <input type="email" name="email" class="name">
        <label for="name" class="label"> EE subjects:</label>
        <input type="text" name="subject" class="name">
        <label for="name" class="label">grades in the course:</label>
        <input type="text" name="grades" class="name">
        <input type="submit" value="submit" name="submit" class="submit">

</form>
</body>
</html>

