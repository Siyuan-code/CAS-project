<?php

require('tutorial21.php');
require('config.php');

if(isset($_POST['delete'])){
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}
    ";

    if(mysqli_query($conn, $query)){
        header('Location: ' .ROOT_URL.'new21.php');
    }
    else{
        echo "Error: ". mysqli_error($conn);
    }
}

//get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

//Create Query
$query = 'SELECT * FROM posts WHERE id= '.$id;

// Get result

$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpBlog</title>
    <link rel="stylesheet" href="bootstrapCerulean.css">
</head>
<body>
<div class="container">
        <a href="<?php echo ROOT_URL1;?>" class="btn">Back</a>
    <h1><?php echo $post['title'];?></h1>

            <small>Created on <?php echo $post['created_at']?>by
            <?php echo $post['author']?>
        </small>
            <p><?php echo $post['body']?></p>

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="pull-right">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']?>">
            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
        </form>

            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
</div>


</body>
</html>