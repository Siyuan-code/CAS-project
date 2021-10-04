
<?php include_once "headerlogin.php" ?>
  <body>
    <div class="login">
      <h2 class="title">Welcome to Rellax !</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="ThesignUp">
        <div class="field input">
          <label for="username">Username:</label>
          <input
            type="text"
            name="username"
            id="username"
            class="text"
            placeholder="e.g: Rellax"
            required
          />
        </div>
        <div class="field input">
          <label for="password">Password:</label>
          <input
            type="password"
            name="password"
            id="password"
            class="text"
            placeholder="enter password"
            required
          />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
            <input type="submit" value="login" class="signUpBtn" name="submit">
        </div>
        <button class="Back"><a href="home.php">Back to Home</a></button>
        <script src="login.js"></script>
        <script src="logintry.js"></script>
  </body>
</html>
