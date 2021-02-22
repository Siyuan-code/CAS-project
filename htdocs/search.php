
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="style.css?rnd=241" />
</head>
<body>
    <h1 class = "find">If you know your username you can search up your email here</h1>
    <div id = "search1">
    <form action="search.php" method = "POST" class="EnterUser">
        <label for="EnterUser">Username:</label>
        <input type="text" placeholder = "enter your username" name = "EnterUser">
        <?php
echo $_POST["EnterUser"];
?>
    </form>
    <a href="signup.php" class="backtoSignUp">Back to Sign Up page</a>
    </div>
</body>
</html>

