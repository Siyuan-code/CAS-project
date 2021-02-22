<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?rnd=226"/>
    <title>The Mall of Youth</title>
</head>
<body>
    <div class="title-top">
        <h1 class="title">Welcome to The Mall of Youth !</h1>
    </div>
    
    <div class="signup">
        <form action="includes/signup.inc.php" method="post" class="mySignup">
            <label for="firstName">First Name</label>
            <input type="text" name = "firstName" placeholder="enter your first name..."> 

            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" placeholder="enter your last name...">

            <label for="Email">Email</label>
            <input type="text" name = "email" placeholder="enter your email...">

            <label for="userName">Username</label>
            <input type="text" name = "username" placeholder="create your own username...">

            <label for="password">Password</label>
            <input type="password" name = "password" placeholder="create your password">

            <label for="passwordRepeat"> Confirm Password</label>
            <input type="password" name = "passwordRepeat" placeholder="confirm your password">

            <button type="submit" class="SignupBtn" name = "submit">Sign up</button>


        </form>
        <a href="logins.php" class="backtologin">Already have an account?</a>
        <br>
        <br>
        <a href="search.php" class= "searchEmail"> Search email</a>
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
             else if ($_GET["error"] == "pwdLong"){
                echo "<p> Your password must be less than 16 characters !</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p> Something went wrong! Try Again !</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p> Congratulations ! You have Signed Up !</p>";
            }
        }
        ?>
            
</body>
</html>

