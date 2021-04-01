<?php 
    session_start();
    print_r($_SESSION);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h3>Thank you <?php echo $name; ?>, you have subscribed with the email <?php echo $email; ?></h3>
    <a href="Tutorial16sub1.php">Go to next page</a>
</body>
</html>