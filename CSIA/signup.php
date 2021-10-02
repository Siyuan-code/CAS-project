<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["confirmPassword"];
    $gender = $_POST["gender"];
    $participant = $_POST["participant"];
    $worker = $_POST["worker"];
    $grade = $_POST["grade"];

    require_once 'dbh.signup.php';
    require_once 'function.c.1.2.php';

    if(emptyInputSignup($username,$email,$pwd,$pwdRepeat,$grade,$gender,$participant, $worker) !== false){
        header("location: ../CSIA/signup.php?error=emptyinput");
        exit();
    }
    if(invalidUserName($username) !== false){
        header("location: ../CSIA/signup.php?error=invalidusername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../CSIA/signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../CSIA/signup.php?error=pwdnotmatch");
        exit();
    }
    if(pwdLength($pwd) !== false){
        header("location: ../CSIA/signup.php?error=pwdLength");
        exit();
    }
    if(userNameExists($conn,$username,$email) !== false){
        header("location: ../CSIA/signup.php?error=usernametaken");
        exit();
    }

    createrUser($conn,$username,$email,$pwd,$gender,$participant,$worker,$grade);
}




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css?rnd=2" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" />
  </head>
  <body>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all fields! </p>";
            }
            else if($_GET["error"] == "invalidusername"){
                echo "<p> Choose a proper username ! </p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p> Write your email correctly</p>";
            }
            else if ($_GET["error"] == "pwdnotmatch"){
                echo "<p> Please enter the same password !</p>";
            }
             else if ($_GET["error"] == "pwdLength"){
                echo "<p> Your password must be between 8 to 16 characters !</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p> Something went wrong! Try Again !</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p> Congratulations ! You have Signed Up !</p>";
            }
        }
        ?>
    <div class="signup">
      <h2 class="title">Welcome to Rellax !</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="ThesignUp">
        <label for="username">Username:</label>
        <input
          type="text"
          name="username"
          id="username"
          class="text"
          placeholder="e.g: Rellax"
        />
        <label for="password">Password:</label>
        <input
          type="password"
          name="password"
          id="password"
          class="text"
          placeholder="enter password"
        />
        <label for="passwordConfirm">Confirm Password:</label>
        <input
          type="password"
          name="confirmPassword"
          id="password"
          class="text"
          placeholder="enter password again"
        />
        <label for="email">Email:</label>
        <input
          type="text"
          name="email"
          id="email"
          class="text"
          placeholder="enter your email"
        />
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" class="text" value="Male" />

        <h3 class="word">Male</h3>
        <input
          type="radio"
          name="gender"
          id="gender"
          class="text1"
          value="Female"
        />
        <h3 class="word1">Female</h3>
        <h3 class="question">Do you want to be a speaker or listener?</h3>
        <input
          type="radio"
          name="participant"
          id=""
          value="speaker"
          class="speaker"
        />
        <h3 class="speakerW">Speaker</h3>
        <input
          type="radio"
          name="participant"
          id=""
          value="listener"
          class="listener"
        />
        <h3 class="listenerW">Listener</h3>
        <h3 class="question">Are you a student or a teacher?</h3>
        <input
          type="radio"
          name="worker"
          id=""
          value="student"
          class="student"
        />
        <h3 class="studentW">Student</h3>
        <input
          type="radio"
          name="worker"
          id=""
          value="teacher"
          class="teacher"
        />
        <h3 class="teacherW">Teacher</h3>
        <h3 class="grade">What grade are you in?</h3>
        <input
          type="text"
          name="grade"
          id="grade"
          class="text"
          placeholder="please enter your grade as only a number"
        />
        <button class="signUpBtn" type="submit" name="submit" class="submit">Sign Up</button>
      </form>
      <button class="signUpBtn"><a href="home.php">Back to Home</a></button>
    </div>
        <br>
        <br>
        <br>
        <br>
  </body>
</html>
