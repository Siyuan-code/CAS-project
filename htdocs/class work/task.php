<?php
$wallet = 1000;
$earnings = 500;
$expenses = 1900; 

if($earnings > $expenses){
    echo "You are in the black";
    echo "<br>";
}
else{
    echo "You are in the red";
    echo "<br>";
}

$wallet = $wallet - $expenses + $earnings;
$fee = abs($wallet * 0.1);
if($wallet<0){
    echo "You owe the bank";
    echo "<br>";
    echo "The fee is $$fee ";
    echo "<br>";
}

$CurrentWallet = $wallet - $fee;

if($CurrentWallet>$wallet){
    echo "The wallet did grow";
}
else{
    echo "The wallet did not grow";
}



$percentage = $expenses/$earnings*100;
echo "The expenses is $percentage % of earning";
echo "<br>";

$dailyExpenses = [40,50,98,123,538,975,421];

echo "The expense of the highest day is $dailyExpenses[5]";
echo "<br>";
echo "The expense of the lowest day is $dailyExpenses[0]";
echo "<br>";

$sum = 0;

for ($i=0;$i<count($dailyExpenses);$i++){
    $sum += $dailyExpenses[$i];
}
  $average = $sum/count($dailyExpenses);
    echo "The average is", " ", round($average);
    echo"<br>";

$dailyExpensesAssociative = ["Sunday" => 40, "Monday" => 50, "Tuesday" => 98, "Wednesday" => 123, "Thursday" => 538, "Friday" => 975, "Saturday" => 421];

echo "Sunday", ":", $dailyExpensesAssociative['Sunday'];
echo "<br>";
echo "Thursday", ":", $dailyExpensesAssociative['Thursday'];











