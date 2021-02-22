<?php
// $output = substr('Hello', 1,3); 
// $output = substr('Hello', -2); 
// $output = strlen('Hello World');
// $output = strpos("Hello World", "o");
// $output = strrpos("Hello World", "o");
// $output = "Hello World                 ";
// var_dump($output);
// $trimmed = trim($output);
// var_dump($trimmed);
// echo $output;
// $text = strtoupper("hello world");
// $text = strtolower("HELLO WORLD");
// $text = ucwords("hello world");
// $text = "hello world";
// $output = str_replace('world', 'Everyone', $text);
// $val = '1';
// $output = is_string($val);
// echo $output;

// $values = array(true,false,null,'abc',33,'33',22.4,'22.4');

// foreach($values as $value){
//     if(is_string($value)){
//         echo "{$value} is a string <br>";
//     }
// }

// $output = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nesciunt tempore quae exercitationem itaque obcaecati qui repellat dolorem est perspiciatis minima nihil sunt commodi vitae necessitatibus asperiores nemo repudiandae distinctio reprehenderit, aspernatur pariatur excepturi? Deserunt provident, quibusdam tenetur ratione officiis accusamus aspernatur? Iure voluptates beatae quod eius cupiditate. Doloremque aperiam quis vero illo ratione, temporibus sint fuga, hic eaque iste omnis incidunt nesciunt unde eum quos amet nobis deleniti? Architecto rerum impedit molestias ratione illo facere, autem fugit quisquam asperiores quibusdam nisi sed est doloribus magni fuga iusto qui maiores assumenda sequi atque! Repellendus sequi tempore reiciendis unde impedit amet.";

// $compress = gzcompress($output);

// echo $compress;

// $original = gzuncompress($compress);

// echo $original;
?>

<?php
// if(isset($_GET['name'])){
//     print_r($_GET);
// }
// if(isset($_POST['name'])){
//     echo $name;
// }
// echo $_POST['name'];
echo $_GET['name'];
echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="algo1.php" method="GET">
    <div>
    <label for="name">Name</label><br>
    <input type="text" name="name">
    </div>
    <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    </div>
    <input type="submit" value="submit">
    </form>
</body>
</html>

