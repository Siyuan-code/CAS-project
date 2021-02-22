<?php

#1
$nums = [1, 2, 3];
echo $sum = $nums[0] + $nums[1] + $nums[2];

#2
$nums = [1, 2]; 

if ($nums[0] == 2 || $nums[0] == 3 || $nums[1] == 2 || $nums[1] == 3 ){
    echo "false";
}
else{
    echo "true";
}

#3

if (count($nums)%2 == 0){
    echo $nums[count($nums)/2 - 1] . $nums[count($nums)/2];
}

#4

$sum = 0;
for ($i = 0; $i < count($nums) ; $i++){
    if ($nums[$i] != 13 && $nums[$i+1] != 13 && $nums[$i-1] != 13){
        $sum += $nums[$i];
    }
    else {
        $sum = $sum;
    }
}

echo $sum;

#5

for ($i = 0; $i < count($nums) ; $i++){
    if ($nums[$i] == 7 && $nums[$i+1] == 7) {
        echo "true";
    }
    elseif ($nums[$i] == 7 && $nums[$i+2] == 7){
        echo "true";
    }
    else{
        echo "false";
    }
}
