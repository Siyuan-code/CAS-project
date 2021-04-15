<?php 
require('databaseQ.php');

$query = 'SELECT * FROM info ';

$result = mysqli_query($conn, $query);

$infos = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="practice.css">
</head>
<body>
    <div>
        <table class="table">
            <tr>
                <th class="tableHead">Name</th>
                <th class="tableHead">Phone number</th>
            </tr>
            <?php foreach($infos as $info): ?>
            <tr>
                <td><?php echo $info['Name'];?></td>
                <td><?php echo $info['Phone_number']?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <button class="btn1"><a href="editTable.php"></a>Edit the table</button>
    </div>

</body>
</html>
