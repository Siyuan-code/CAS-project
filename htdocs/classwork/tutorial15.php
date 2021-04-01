<?php
    //Message Vars
    $msg = '';
    $msgClass = '';
    //Check submit
    if(filter_has_var(INPUT_POST,"submit")){
        // echo "Submitted";
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check requried fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // echo "PASSED";
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'The email is not valid';
                $msgClass = "alert-danger";
            }
            else{
                // echo "PASSED";
                $toEmail = 'siyuan041103@gmail.com';
                $subject = 'Contact Request From' . $name;
                $body = '<h2>Contact Request</h2>
                <h4>Name</h4> <p>'.$name.'</p>
                <h4>Email</h4> <p>'.$email.'</p>
                <h4>Message</h4> <p>'.$message.'</p>';
                //Email Header
                $headers = "MIME-Version:1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                //additional headers
                $headers .= "From: " . $name. "<". $email. ">". "\r\n";
                    // Email Sent
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = "alert-success";
                }
                else{
                    $msg = 'Your email has NOT been sent';
                    $msgClass = "alert-danger";
                }
            }
        }
        else{
            $msg = 'Please fill in all fields';
            $msgClass = "alert-danger";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Siyuan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="<?php echo isset($_POST['name']) ? $name : '';?>">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>

      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo isset($_POST['email']) ? $email : '';?>">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Message</label>
      <input class="form-control" id="exampleTextarea" rows="3" name = "message" value = "<?php echo isset($_POST['message']) ? $message : '' ?>"></input>
    </div>

    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</body>
</html>