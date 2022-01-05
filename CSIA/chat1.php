<?php
include_once "heading.php";
// This is the tutorial that I learned my code from https://youtu.be/VnvzxGWiK54
?>

<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
  header("location: ../loginNew.php");
}
?>

<?php 
            include_once "data.php";
            $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE uniqueid = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
?>

  <body>
    <div class="heading">
      <h2 class="logo">R</h2>
      <h2 class="name">Rellax</h2>
      <h2 class="home"><a href="homeafter.php">Home</a></h2>
      <a href="logout.php?logout_id=<?php echo $row['uniqueid'] ?>" class="logout">Logout</a>
      <h3 class="profile"><a href="profile.php">Profile</a></h3>
      <h3 class="resource"><a href="resource.php">Resources</a></h3>
      <h3 class="browse"><a href="browse.php">Browse Listeners</a></h3>
    </div>
    <div class="main">
      <div class="wrapper">
        <section class="users">
          <header>
            <?php 
            include_once "data.php";
            $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE uniqueid = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="content">
            <img src="image/<?php echo $row['photo']?>" alt="">
              <div class="details">
                <span><?php echo $row['username']?></span>
                <p><?php echo $row['userstatus']?></p>
              </div>
            </div>
          </header>
          <div class="search">
            <span class="text">
              Select a listener to talk about your worries
            </span>
            <input
              type="text"
              name=""
              id=""
              placeholder="Enter name to search..."
            />
            <button><i class="fas fa-search"></i></button>
          </div>
          <div class="users-list">
          </div>
        </section>
      </div>
      <section class="chat-area">
        <header>
        <?php 
            include_once "data.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE uniqueid = {$user_id}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            ?>
          <img src="image/<?php echo $row['photo']?>" alt="">
          <div class="details1">
            <span><?php echo $row['username']?></span>
            <p><?php echo $row['userstatus']?></p>
          </div>
        </header>
        <div class="chat-box">
          
        </div>
      </section>
      <form action="#" method="post" class="typing-area" autocomplete="off">
          <input type="text" name="outgoing_id" id="" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
          <input type="text" name="incoming_id" id="" value="<?php echo $user_id ?>" hidden>
          <input type="text" class="input-field" name="message" id="" placeholder="Écrivez un message...">
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>
    <script src="search1.js"></script>
    <script src="chat.js"></script>
  </body>
</html>
