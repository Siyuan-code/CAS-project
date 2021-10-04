<?php include_once "headersignin.php"?>
<body>
<div class="signup">
    <h2 class="title">Welcome to Rellax !</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="ThesignUp" enctype="multipart/form-data">
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
            <label for="passwordConfirm">Confirm Password:</label>
            <input
            type="password"
            name="confirmPassword"
            id="password"
            class="text"
            placeholder="enter password again"
            required
            />
        <div class="field input">
            <label for="email">Email:</label>
            <input
            type="text"
            name="email"
            id="email"
            class="text"
            placeholder="enter your email"
            required
            />
        </div>
        <div class="field input">
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
        </div>
        <div class="field input">
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
        </div>
        <div class="field input">
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
        </div>
        <div class="field input">
            <h3 class="grade">What grade are you in?</h3>
            <input
            type="text"
            name="grade"
            id="grade"
            class="text"
            placeholder="please enter your grade as only a number"
            />
        </div>
        <div class="field image">
            <input type="file" name="photo" id="">
        </div>
        <div class="field button">
            <input type="submit" value="sign up" class="signUpBtn" name="submit">
        </div>
        
    </form>
        <button class="Back"><a href="loginNew.php">Login</a></button>
</div>
<script src="signup.js"></script>
<script src="signuptry.js"></script>
        <br>
        <br>
        <br>
        <br>
</body>
</html>