<?php
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rellax</title>
    <link rel="stylesheet" href="home.css?rnd=5" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" />
  </head>
  <body>
    <?php 
    include_once "data.php";
    $sql = mysqli_query($conn, "SELECT * FROM userinfo WHERE uniqueid = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
    
    ?>


    <button class="signUp">
      <a href="logout.php?logout_id=<?php echo $row['uniqueid'] ?>">Logout</a>
    </button>
    <h3 class="chat"><a href="chat1.php">Chat</a></h3>
    <h3 class="resource"><a href="resource.php">Resources</a></h3>
    <h3 class="browse"><a href="browse.php">Browse Listeners</a></h3>
    <i class="fas fa-bell"></i>
    <button class="change" onclick = "change()" >Change theme</button>
    <button class="changeBack" onclick = "changeBack()" >Original theme</button>
    
    <div class="background">
      <h2 class="logo">R</h2>
      <h2 class="name">Rellax</h2>
      <h1 class="wel">Welcome to Rellax !</h1>
      <h2 class="line1">Are you feeling stressed?</h2>
      <h2 class="line2">Do you want to find a person to listen to you?</h2>
      <h2 class="line3">Come here and find someone to talk to</h2>
      <h1 class="rellax">RELLAX</h1>
    </div>
    <div class="chat-box">
      <div class="chat-outgoing">
        <div class="details1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, sed.</p>
        </div>
      </div>
      <div class="chat-incoming">
        <img src="img.jpg" alt="">
        <div class="details1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, sed.</p>
        </div>
      </div>
      <div class="chat-outgoing">
        <div class="details1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, sed.</p>
        </div>
      </div>
      <div class="chat-incoming">
        <img src="img.jpg" alt="">
        <div class="details1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, sed.</p>
        </div>
      </div>
      <div class="chat-outgoing">
        <div class="details1">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, sed.</p>
        </div>
      </div>
    </div>

    <div class="first-page">
      <div class="box">
        <h1 class="mission">Our Mission</h1>
        <fieldset class="mission-text">
          We want to provide you with a listening ear when you need to talk
          about something, whether that be a problem you don’t know whom to talk
          to about or something exciting that you would like to tell someone!
          Please don’t hesitate to reach out. We are here to help!
        </fieldset>
      </div>
      <div class="mainDiv">
        <div class="square"></div>
        <div class="square2"></div>
        <div class="square3"></div>
      </div>
      <div class="box2">
        <h1>Privacy and Safety</h1>
        <fieldset class="privacy">
          “Your Listener will not know your identity and nor will you know
          theirs. Please be careful not to share any information that might
          reveal your identity or ask any questions about someone else’s.
        </fieldset>
        <fieldset class="safety">
          Please be respectful of everyone. Do not send anything inappropriate
          or harmful to anyone or your account will be put on probation
        </fieldset>
      </div>
      <div class="ball"></div>
    </div>
    <div class="endpage">
      <h1 class="about">About us</h1>
    </div>
    <script src="home.js"></script>
  </body>
</html>