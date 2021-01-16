<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
</head>
<body>
 




</body>
</html>

<?php

// echo "Answer:", $_POST["num1"]+ $_POST["num2"];


class student{
  private $name;
  private $major;
  private $gpa;

  function __construct($Name, $Major, $GPA){
      $this -> name = $Name;
      $this -> major = $Major;
      $this -> setGPA($GPA);
  }
  function HasHonors(){
    if($this -> gpa >= 3.5){
      echo "This student has honors";
    }
    else{
      echo "This student does not have honors";
    }
  }
  function GetGPA(){
    return $this -> gpa;
  }
  function setGPA($GPA){
    // $this -> gpa = $GPA;
    if($GPA == "3.5"){
      $this -> gpa = $GPA;
    }
    else{
      $this -> gpa = "False";
    }
  }
}

class student1 extends student{
  
}

$student1 = new student("Tom", "Math", 4.88);
$student1 -> setGPA(3.5);
echo $student1 -> HasHonors();

echo $student1 -> GetGPA();





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
  // echo "Your name is:", $_GET["name"];
  // echo "Your age is:", $_GET["age"];


  // define('GREETING',"Hello World",true);
  // echo greeting
  // $people = array('Kevin', 'Jeremy', 'Sara');
  // echo $people[1];
  // $ids = array(23,55,12);
  // $cars = ['Honda', 'Toyota', 'Ford'];
  // $cars[3] = 'Chevy';
  // $cars[] = 'BMW';
  // echo $cars[4];
  // echo count($cars)
  // print_r($cars);
  // var_dump($cars);
  // $people = array('Brad' => 35, 'Jose' =>12, "Will" => 45);
  // echo $people['Brad'];
  // print_r($people);


  // $ids = [22 => 'Brad', 44 =>'Jose', 55 => 'Will'];
  // echo $ids[22]
  // $people['Jill'] = 42;
  // echo $people['Jill'];
//   $cars = array(
//     array('Honda',20,10), 
//   array('Toyota', 30, 20), 
//   array('Yuils', 20, 11)
  
// );

// echo $cars[1][0];

// for($i = 5; $i<10; $i++){
//   echo "Hello", $i;
//   echo "<br>";
// }

// $i = 0;
// while($i <10){
//   echo $i;
//   echo "<h1>Hello World</h1>";
//   $i++;
// }

// $i = 0;

// do{
//   echo "Hello World";
//   echo "<br>";
//   $i++;
// }
// while($i<10);

// $people = ['Brad' => 'Brad@gmail.com', 'Jose' => 'Jose@gmail.com', 'Will'=> 'Will@gmail.com'];
// foreach($people as $person => $email){
//   echo $person, " ", 'and' , " ", $email;
//   echo "<br>";
// }

// function main(){
// echo "Hello World";

// }

// main();
// function Hello($name = 'Siyuan'){
//   echo "Hello $name<br>";
// }

// Hello();

// function addNumbers($num1,$num2){
//   return $num1 + $num2;
// }
// echo addNumbers(5,6)

// $myNum = 10;
// function addFive($num){
//    $num += 5;
 
// }
// function addTen(&$num){
//    $num += 10;
// }
// addFive($myNum);
// echo "Value :$myNum<br>";
// addTen($myNum);
// echo "Value: $myNum<br>";

// $num = 5;
// if($num === 5){
//   echo "5 passed";
// }

?>