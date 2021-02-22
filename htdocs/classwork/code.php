<?php

// #1
// for($n=1; $n<1000; $n++){
//     echo $odd = 2 * $n -1, " ";
// }

// #2
// $array = [1, 3, 6, 19, 56, 55, 43, 23, 21];

// function average(&$array){
//     $sum = 0; 
//     for ($i=0; $i<count($array); $i++){
//         $sum += $array[$i];
//     }
//     echo $avg = $sum/count($array);
//     echo "<br>";
// }
// echo average($array);

// function LargeSpan(&$array){
    // $high = $array[0];
    // $low = $array[0];
    // for($i=0;$i<count($array);$i++){
    //     if ($array[$i]>$high){
    //         $high = $array[$i];
    //     }
    //     if($array[$i]<$low){
    //         $array[$i]=$low
    //     }
    // }
    // echo $high;
    // echo $low;
//    for ($i=0; $i < count($array); $i++){
//        if($array[$i+1]>$array[$i]){
//            $maxNumber = $array[$i+1];
//            $minNumber = $array[0];
//        }
// }
// echo "The two values that are have the greatest span are ", $maxNumber, " ", $minNumber;
// }

// echo LargeSpan($array);

// function SmallSpan(&$array){
//         $firstDiff = $array[1] - $array[0];
//         for ($j = 2; $j < count($array); $j++)
//         {
//             if(abs($array[$j] - $array[$j-1]) < $firstDiff){
//                 $num1 = $array[$j];
//                 $num2 = $array[$j-1];
//                 echo "The two values that have the smallest span is ", $num1, " ", $num2;
//                 echo "<br>";
//             }
//         }
//     }

// echo SmallSpan($array);


// echo SmallSpan($array);

// function SmallSpan($array){
//     $smallSpan = $array[1] - $array[0];
//     $index = 0;
//     for ($i=1 ; $i <count($array); $i++){
//         if($array[$i] - $array[$i+1] < $smallSpan){
//             $smallest = $array[$i] - $array[$i+1];
//             $index = $i;
//         }
//     }
// }
// echo $array[$index] . $array[$index+1];

// #3

// $num1 = 1;
// $num2 = 1;

// while($num1<10000){
//     echo $num1 + " " , " ";
//     $num3 = $num1 + $num2;
//     $num1 = $num2;
//     $num2 = $num3;
// }

// #4


// function factorial($n){
//     $ans = 1;
//     for($i = 2;$i <= $n; $i++){
//         $ans = $ans * $i;
//     }
//     echo $ans;
// }

// factorial(10);

#5

// $binary = 111111;
// $decimal = 0;
// $weight = 1; 

// while ($binary != 0){
//     $remainder = $binary % 10;
//     $decimal = $decimal + $remainder*$weight;
//     $binary = $binary / 10; 
//     $weight = $weight*2;
// }

// echo $decimal;

#6

$hex = [2, 9, A]; 
$k = 0; 
$decimal = 0; 

for ($i = count($hex) - 1; $i >=0; $i--){
    if (ctype_upper($hex[$i])){
        $decimal = $decimal + ($hex[$i] - 55)*pow(16,$k);
    }
    else {
        $decimal = $decimal + ($hex[$i] - 48)*pow(16,$k);
        $k++;
    }
}
echo $decimal;
// $A = 10;
// $B = 11;
// $C = 12;
// $D = 13;
// $E = 14;
// $F = 15;
// $hexdecimal = BED;
// $hex1 = substr('BED', 1);

// // $decimal = $D*1 + $E * 16 + $B*16*16;
// // $decimal = hexdec($hexdecimal);

// echo $decimal;

#7
// function addDigits($num){
//     if ($num > 0){
//         return ($num - 1)%9 +1;
//     }
//     else{
//         return 0;
//     }
// }

// echo addDigits(9876);

// #8

// function mergeArrays(&$arr1, &$arr2, $n1, $n2, &$arr3){
//     $i = 0;
//     $j = 0;
//     $k = 0;

//     while ($i < $n1 && $j < $n2)
//     {
//         if ($arr1[$i] < $arr2[$j]){
//             $arr3[$k++] = $arr1[$i++];
//         }
//         else{
//             $arr3[$k++] = $arr2[$j++];
//         }

//     }

//     while ($i < $n1){
//         $arr3[$k++] = $arr1[$i++];
//     }
//     while ($j < $n2){
//         $arr3[$k++] = $arr2[$j++];
//     }

// }

// $arr1 = [1, 2, 3, 4];
// $n1 = sizeof($arr1);
// $arr2 = [2, 5, 7, 8];
// $n2 = sizeof($arr2);
// $arr3[$n1 + $n2] = [];
// mergeArrays($arr1, $arr2, $n1, $n2, $arr3);

// for ($i = 0; $i < $n1 + $n2; $i++){
//     echo $arr3[$i] . " ";
// }

// #9

// function threeDigits(){
//     $amount = 0;
//     for($i = 1; $i <= 4; $i++){
//         for($j = 1; $j <=4; $j++){
//             for ($k = 1; $k <= 4; $k++){
//                 if($k != $i && $k != $j && $i != $j){
//                     $amount ++;
//                     echo $i, $j, $k, " ";
//                     echo "<br>";
//                 }
//             }
//         }
//     }
//     echo "The total number of three digits numbers ", $amount;
// }

// threeDigits();

// #10

// $text = "Hello World";
// $normalText = gzuncompress($hashedTtext);

// function Encrypt($text){
//     $hashedText = gzcompress($text);
//     echo $hashedText, "<br>";
// }

// echo Encrypt($text);

// function Decrypt(&$normalText){
//     echo $normalText;
// }

// echo Decrypt($text);


