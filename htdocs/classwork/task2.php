<?php

// #1
echo "#1";
echo "<br>";
echo "<br>";
function withdraw($amount){
    $balance = 1000;
    if($amount%5==0){
        echo "The balance is " , $balance - $amount-1;
    }
    else{
        echo "Error: the withdraw amount is not a multiple of 5";
    }
};

withdraw(100);

$withdrawAmount = ["40", "12", "34", "86", "50"];
$balance = 1000;
echo "<br>";

for ($i=0; $i<count($withdrawAmount); $i++){
    if($withdrawAmount[$i]%5==0){
         echo "The balance is : ", $balance - $withdrawAmount[$i]-1;
         echo "<br>";
    }
    else{
        echo "Error : The withdraw amount is not a multiple of 5";
        echo "<br>";
    }
};

echo "<br>";
echo "<br>";
echo "<br>";

// #2

$floorsStops = [2,4,5,8,5,2,12,17,168];
$direction=1;
$directions=2;
if($floorsStops[4] > $floorsStops[3]){
    echo "there is $direction direction change in total.";
}
else{
    echo "there is $directions direction change in total.";
}

// for($i=0;$i<count($floorsStops);$i++){
//     if($floorsStops[$i+1]>$floorsStops[$i]){
//     $direction=1;
//     echo "there is $direction direction change in total";
//     echo "<br>";
//     }
//     else if($floorsStops[$i+1]>$floorsStops[$i] || $floorsStops[$i+5]<$floorsStops[$i+4]){
//     $directions = 2;
//     echo "there are $directions direction change in total";
//     echo"<br>";
//     }
// }


echo "<br>";
echo "<br>";
echo "<br>";



// #3

function numRepeat(){
    $arr = ["123", "322", "549"];
    if($arr[1]==$arr[0]){
        echo "the value is repeated.";
        echo "<br>";
    }
    else{
        echo "The value is not repeated.";
        echo "<br>";
    }
}
numRepeat();

function Exist($arr1,$int){
      $arr = [12, 23,45];
      if($int == $arr[1]) {
          echo "The integer is in the array";
          echo "<br>";
      }
      else{
          echo "The integer is not in the array";
          echo "<br>";
      } 
}
Exist(3,12);


// #4

$number = [123];

function number ($number){
    echo $number1 = 321; 
};

number($number);

?>



