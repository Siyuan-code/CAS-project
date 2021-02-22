<?php
$names = ["Bob","Betty","Kim","Lucy","Dave"];

echo "These names start with D";
echo "<br>";
for ($i=0;$i<count($names);$i++){
    if($names[$i]=="Dave"){
        echo $names[$i];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="algo.php" method="POST">
        <input type="text" name = "ID">Type the ID number that you wish to find
        <br>
        <input type="submit" value="submit">
        </form>
</body>
</html>

<?php
$ID = [1001,1002,1050,1100,1120,1180,1200,1400];
$names = ["Apple","Cherry","Peach","Bnana","Fig","Grape","Olive","Mango"];

$low = $ID[0];
$high = $ID[7];
$found = -1;
$target = $_POST["ID"];

while($found=-1 && $low<=$high){
    $mid = ($low+$high)/2;
    if ($mid == $target) {
        $found = $mid;
    }
    else if($mid < $target){
        $low = $mid +1;
    }
    else if($mid > $target){
        $high = $mid-1;
    }
}
if($found >= 0){
echo $target . ":" . $names[$found];
echo "<br>";}


$num = [15,30,85,25,40,90,50,65,20,60];

echo "Before sorting";
for ($i=0;$i<count($num);$i++){
    echo $num[$i];
    echo "<br>";
for($j = 0; $j < count($num); $j++){
    for ($k = 0; $k < count($num); $k++){
        if ($num[$k] < $num[$k+1]){
            $temp = $num[$k];
            $num[$k] = $num[$k+1];
            $nums[$k+1] = $temp;
        }
    }
    }
}



$arr = [34,12,56,93,42,1,4,90];
$numItems = 10;
for ($i=0;$i<count($numItems-1);$i++){
    for ($j=0;$j<count($numItems-1);$j++)
    if($arr[$i] > $arr[$j]){
        $temp1 = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp1;
    }
}


    
