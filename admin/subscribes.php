<?php 

require '../config/dbconfig.php';
$query = $conn->query('SELECT * FROM subscribe');
$subscribes = $query->fetchAll();

if($_SESSION['permission']==1 || $_SESSION['permission']==0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribes</title>
</head>
<body>
<div class="container">
    <h1>Subscribers</h1>
    <table class="table">
        <thead>
                <th scope="col">Sub_id</th>
                <th scope="col">E-mail</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscribes as $subscribe) : ?>
                <tr>
                    <td><?php echo $subscribe['sub_id']; ?></td>
                    <td><?php echo $subscribe['email']; ?></td>
                    <td><a href="index.php?page=delete_sub&id=<?php echo $subscribe['sub_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>


<?php
    } else {
        header ('Location: index.php?page=test');
    }
?>