<?php 
    //check for posted data
    // if (filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';
    // }else{
    //     echo "No Data";
    // }

    // if(filter_has_var(INPUT_POST, 'data')){
    //     $email = $_POST['data'];

    //     // Remove illegal chars
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email . "<br>";


    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo 'Email is valid';
    //     }
    //     else {
    //         echo "Email is not valid";
    //     }


    //     // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //     //     // echo 'Email is validated';
    //     // }
    //     // else {
    //     //     echo "Email is not valid";
    //     // }
    // }

    // $var = 55.7; 

    // if (filter_var($var, FILTER_VALIDATE_INT)){
    //     echo "The number is a integer";
    //     echo "<br>";
    // }
    // else{
    //     echo "The number is not a integer";
    //     echo "<br>";
    // }

    // $number = a4s43s322hdsafasdaio233431;
    // var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));

    // $var = '<script>alert(1)</script>';
    // // echo $var;
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    // $filters = array(
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "number" => array(
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array(
    //             "min_range" => 1,
    //             "max_range" => 100
    //         )
    //     )
    //         );
    //     print_r(filter_input_array(INPUT_POST,$filters));

    // $arr = array(
    //     "name" => "siyuan ruan",
    //     "age" => "17",
    //     "email" => "syuanuse@gmail.com"
    // );

    // $filters = array(
    //     "name" => array(
    //         "filter" => FILTER_CALLBACK,
    //         "options" => "ucwords"
    //     ),
    //     "age" => array(
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array(
    //             "min_range" => 1,
    //             "max_range" => 120
    //         ) 
    //     ),
    //     "email" => FILTER_VALIDATE_EMAIL
    //         );
    // print_r(filter_var_array($arr, $filters));
?>




<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input type="text" name="data">
<input type="text" name="number">
<button type="submit">Submit</button>
</form>