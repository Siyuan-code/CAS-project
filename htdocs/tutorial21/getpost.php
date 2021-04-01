<?php

require('tutorial21.php');

if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

    if(mysqli_query($conn, $query)){
        header('Location: ' .ROOT_URL.'new21.php');
    }
    else{
        echo "Error: ". mysqli_error($conn);
    }
}

?>


<?php include('inc/header.php'); ?>
    <div class="jumbotron">
    <h1>Add Post</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea type="text" name="body" id="" class="form-control"></textarea>
        </div>
        <input type="submit" value="submit" name="submit" class="btn btn-primary">
        
        
</form>
    </div>
<?php include('inc/footer.php'); ?>