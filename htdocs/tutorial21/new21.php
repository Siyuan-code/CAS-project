<?php

require('tutorial21.php');

//Create Query
$query = 'SELECT * FROM posts  ';

// Get result

$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>


<?php include('inc/header.php'); ?>
    <div class="jumbotron">
    <h1>Posts</h1>
    <?php foreach($posts as $post): ?>
        <div class="well">
                <h3 class="lead" ><?php echo $post['title'];?></h3>
            <small class="lead">Created on <?php echo $post['created_at']?>by
            <?php echo $post['author']?>
            <p class= "lead"><?php echo $post['body']?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $post['id'] ?>">Read More</a>
        </small>
        </div>
    <?php endforeach?>
    </div>
<?php include('inc/footer.php'); ?>