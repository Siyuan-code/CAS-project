<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
      <input type="text" name="name" />
      <input type="number" name="age">
      <input type="submit" />
    </form>
</body>
</html>

<?php
  // $name = "John";
  // $age = 35;
  // echo"<h1>Hello World $name</h1>";
  // echo"<hr>";
  // echo"<p>This is me, $age</p>";
  // $phrase = "Hello World";
  // $age = 17;
  // $gpa = 4.83;  //decimal
  // $isMlae = true;
  // null;
  // $phrase = "Hello World";
  // echo strlen($phrase);
  // $phrase[1] = A;
  // echo $phrase[1];
  // echo str_replace("Hello","Bonjour",$phrase);
  // echo substr($phrase,5,3);
  // $num = 10;
  // $num++;
  // $num = $num +10;
  // echo $num;
  // echo abs(-200);
  // echo pow(2,4);
  // echo sqrt(169);
  // echo max(2,10);
  // echo min(2,5);
  // echo round(3.2234242432);
  // echo ceil(3.5);
  // echo floor(5.9);
  echo "Your name is:", $_GET["name"];
  echo "Your age is:", $_GET["age"];

?>