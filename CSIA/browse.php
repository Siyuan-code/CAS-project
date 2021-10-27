<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="browse.css?rnd=11" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" />
    <title>Browse listeners</title>
</head>
<body>
<?php 
session_start();
?>

<?php 
    include_once "data.php";
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE participant = 'listener'");
    if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    }
?>
    <div class="heading">
        <h2 class="logo">R</h2>
        <h2 class="name">Rellax</h2>
        <h2 class="home"><a href="homeafter.php">Home</a></h2>
        <a href="logout.php?logout_id=<?php echo $row['uniqueid'] ?>" class="logout">Logout</a>
        <h3 class="profile"><a href="profile.php">Profile</a></h3>
        <h3 class="resource"><a href="resource.php">Resources</a></h3>
        <h3 class="chat"><a href="chat1.php">Chat</a></h3>
    </div>
    <div class="main">
        <div class="wrapper">
            <section class="users">
                <div class="search">
                    <input
                    type="text"
                    name=""
                    id=""
                    placeholder="search by gender..."
                    />
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="search1">
                    <input
                    type="text"
                    name=""
                    id=""
                    placeholder="search by occupation..."
                    />
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">
        
                </div>
            </section>
            
        </div>
    </div>
        <script src="browse.js?rnd=4"></script>
        <script src="browse2.js?rnd=1"></script>
</body>
</html>