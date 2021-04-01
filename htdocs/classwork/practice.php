<?php
    $number = $_POST['number'];
    $number1 = $_POST['number1'];
    $operation = $_POST['operation'];
    if($operation=="*"){
        echo $output = $number*$number1;
    }
    if($operation=="+"){
        echo $output = $number+$number1;
    }
    if($operation=="-"){
        echo $output = $number-$number1;
    }
    if($operation=="/"){
        echo $output = $number/$number1;
    }
    
    echo "<br>";

    $username = "Siyuan";
    $password = "Siyuan123";
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];
    if($username1 == $username && $password1 == $password){
        echo $username. " has successfully logged in.";
        echo "<br>";
    }
    else{
        echo "Your username or password is not correct.";
        echo "<br>";
    }

    $sentence = $_POST['sentence'];
    echo str_replace("apple", "orange", $sentence);
    echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP SELF'] ?>">
    <input type="text" name="number" id="">
    <input type="text" name="number1" id="">
    <input type="submit" value="submit">

    <select name="operation" id="">
        <option value="*" >*</option>
        <option value="+" >+</option>
        <option value="-" >-</option>
        <option value="/" >/</option>
    </select>
</form>
<br>
<br>
<br>
<br>
<br>
<form method="POST" action="<?php echo $_SERVER['PHP SELF'] ?>">
<label for="username">username:</label>
<input type="text" name="username" id="username"> 
<br>
<br>
<label for="password">password:</label>
<input type="password" name="password" id="password">
<input type="submit" value="submit">
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="<?php echo $_SERVER['PHP SELF']?>" method="post">
<label for="sentence">Original Sentence</label>
<input type="text" name="sentence" id="sentence">
<input type="submit" value="submit">
</form>
</body>
</html>