<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css?rnd=4" />
    <link rel="stylesheet" href="resource.css?rnd=1" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" />
    <title>Resources</title>
</head>
<body>
<?php 
session_start();
?>

<?php 
    include_once "data.php";
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE uniqueid = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    }
?>
    <div class="heading">
        <h2 class="logo">R</h2>
        <h2 class="name">Rellax</h2>
        <h2 class="home"><a href="homeafter.php">Home</a></h2>
        <a href="logout.php?logout_id=<?php echo $row['uniqueid'] ?>" class="logout">Logout</a>
        <h3 class="chat"><a href="chat1.php">Chat</a></h3>
        <h3 class="profile"><a href="profile.php">Profile</a></h3>
        <h3 class="browse"><a href="browse.php">Browse Listeners</a></h3>
    </div>
    <div class="place">
        <h2>Resources</h2>
    </div>
</body>
</html>