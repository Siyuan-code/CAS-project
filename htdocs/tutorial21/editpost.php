<?php

require('tutorial21.php');

if(isset($_POST['submit'])){
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "UPDATE posts SET 
        title='$title',
        author = '$author',
        body = '$body'
        WHERE id = {$update_id}
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


<?php include('inc/header.php'); ?>
    <div class="jumbotron">
    <h1>Add Post</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" value="<?php echo $post['title'];?>">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id="" class="form-control" value="<?php echo $post['author'];?>">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea type="text" name="body" id="" class="form-control" value="<?php echo $post['body'];?>" ></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']?>">
        <input type="submit" value="submit" name="submit" class="btn btn-primary">
        
        
</form>
    </div>
<?php include('inc/footer.php'); ?>