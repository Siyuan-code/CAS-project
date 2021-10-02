<?php
if (isset($_POST["submit"])) {
    $message = $_POST['message'];

    require_once 'dbh.signup.php';
    require_once 'message.php';

    if(emptyInputMessage($message) !== false){
        header("location: ../CSIA/chat.php?error=emptyinput");
        exit();
    }
    SendMessage($conn,$message);
}





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat</title>
    <link rel="stylesheet" href="chat.css?rnd=4" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" />
  </head>
  <body>
    <div class="heading">
      <h2 class="logo">R</h2>
      <h2 class="name">Rellax</h2>
      <h2 class="home"><a href="home.html">Home</a></h2>
    </div>
    <div class="main">
        <div class="chatBox">
            <div class="messageBox">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <input
                    type="text"
                    name="message"
                    id="message"
                    class="text"
                    placeholder="Enter your message"
                  />
                  <button class="signUpBtn" type="submit" name="submit" class="submit">Send</button>

              </form> 
            </div>

        </div>

    </div>
  </body>
</html>
