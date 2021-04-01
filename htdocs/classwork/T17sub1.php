<?php 
    $user = ["name" => "Siyuan", "email" => "siyuan041103@gmail.com", "age" =>17];
    $user = serialize($user);
    setcookie("user", $user, time()+(86400*30));
    $user = unserialize($_COOKIE['user']);
    echo $user['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>