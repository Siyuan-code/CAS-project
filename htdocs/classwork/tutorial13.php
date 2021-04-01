<?php

$loggedIn = false; 
$arr = [1,2,3,4,5,6];
// if ($loggedIn){
//     echo "you are logged in";
// }
// else{
//     echo "you are NOT logged in";
// }

// echo ($loggedIn) ? "you are logged in" : "you are NOT logged in";

// $isRegistered = ($loggedIn == true) ? true : false;

// echo $isRegistered;

// $age = 14; 
// $score = 11;

// echo "Your score is ". ($score > 10 ? ($age>15 ? "Average" : "Exceptional" ) : ($age>15 ? "Horrible" : "Excellent")); 

?>

<div >
<?php if ($loggedIn) {
    ?> <h1>Welcome User</h1> <?php 
} else {?> <h1>You need to login </h1>

<?php }  ?>
</div>

<div>

<?php if($loggedIn): ?>
<h1>Welcome User</h1>
<?php else :?>
<h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<div>
<?php 
    foreach ($arr as $val):
?>
<?php echo $val . " "; ?>
<?php endforeach ?>
</div>

<div>
<?php for ($i=0; $i<10; $i++):?>
<li><?php echo $i ?></li>

<?php endfor ?>
</div>