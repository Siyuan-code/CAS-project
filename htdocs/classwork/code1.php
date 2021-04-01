<?php
// before MAMP

// $items = ["chocolate", "phone", "car", "mug", "apple"];
// $price = [3, 700, 5000, 345, 100];
// $inventory = [4, 10, 17, 21, 1000];

// for ($i = 0; $i < count($inventory); $i++){
//     if($inventory[$i]<10){
//         echo $item[$i];
//     }
// }
$names = array( "Alice","Bob","Charlie","David","Estefan","Farid","Gaelle","Huda","Irma");
$daysRemaining = array(23,14,-32,-15,-30,15,7,-18,-39);

function payment($names){
	for ($j=0; $j<count($daysRemaining); $j++){
		if ($daysRemaining[$j]<=30 && $daysRemaining[$j]>0){
            echo "just to remind you, you got a payment within 30 days.";
            echo "<br>";
}

    elseif ($daysRemaining[$j]>= -30 && $daysRemaining[$j] < -14){
    echo "Warning: you has payment overdue between 14 and 30 days.";
    echo "<br>";
}
    elseif ($daysRemaining[$j]<-30){
    echo "Our contract will be canceled.";
    echo "<br>";
}
}
}

payment($namêëéè);