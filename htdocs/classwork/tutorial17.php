<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']); 
        setcookie('username', $username, time()+3600);
        header('Location: T17sub.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP cookies</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" id="" placeholder="Enter Username">
    <input type="submit" name="submit" id="" placeholder="Submit">
    </form>
</body>
</html>