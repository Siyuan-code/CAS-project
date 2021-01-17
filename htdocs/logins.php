<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Mall of Youth</title>
    <link rel="stylesheet" href="style.css?rnd=239" />
    
  </head>
  <body >

    <div class="title-top"><h1 class="title">Welcome to The Mall of Youth !</h1></div>

    <div class="container">
    <form
      action="includes/login.inc.php"
      class="myLogin"
      method="POST"
      
    >
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter username" name="username" />

      <label for="password"><b>password</b></label>
      <input
        type="password"
        name="password"
        placeholder="type password"
      />
        <a href="signup.php" class="register"><p>Register an account</p></a>
      <!-- <label for="password-confirm"><b>Confirm Password</b></label>
      <input
        type="password"
        placeholder="Confirm password"
        name="password-confirm"  
        required
      /> -->

      <input type="checkbox" value="remember" class="remember"> remember password

      <!-- <p>
        By creating an account you agree to our
        <a href="#" style="color: rgb(78, 168, 241)">Terms & Privacy</a>
      </p> -->

      <div class="clearfix">

          <button type="submit" class="loginbtn" name = "submit">Login</button>
        
        <!-- <button type="button" class="loginbtn">
          <a href="homepage.html">login</a>
        </button> -->
      </div>
      <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all fields! </p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p> Password or Username <br>incorrect </p>";
            }
          }
        ?>
    </div>
  
    </form>

    <!-- <div class="image-lake">
      <img src="./Image/WhatsApp Image 2020-12-10 at 7.15.07 PM.jpeg" alt="Lake" >
    </div> -->

  </body>
</html>