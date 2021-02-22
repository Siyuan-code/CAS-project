<?php
// before MAMP

$items = ["chocolate", "phone", "car", "mug", "apple"];
$price = [3, 700, 5000, 345, 100];
$inventory = [4, 10, 17, 21, 1000];

for ($i = 0; $i < count($inventory); $i++){
    if($inventory[$i]<10){
        echo $item[$i];
    }
}