<?php 
    if(isset($_POST['submit'])){
        // echo "Submitted";
        session_start();
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        header('Location: Tutorial16sub.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" id="" placeholder="Enter Name">
    <input type="text" name="email" id="" placeholder="Enter email">
    <input type="submit" name="submit" id="" placeholder="Submit">
    </form>
</body>
</html>