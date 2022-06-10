<?php
    //Lista e perdoruesve "index"
    require '../config/dbconfig.php';

    $query = $conn->query('SELECT * FROM rezervimi');
    $users = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon/logo.ico" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>(ADMIN ONLY) STAFF</title>
</head>
<body>
    <div class="container">
        <h1>
            <a href="add_rezervimi.php" class="btn btn-primary">Shto nje Termin te ri</a>
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Emri</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Data</th>
                    <th scope="col">Koha</th>
                    <th scope="col">Persona</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                <tr>
                    <td><?php echo $user['id']; ?> </td>
                    <td><?php echo $user['emri']; ?> </td>
                    <td><?php echo $user['email']; ?> </td>
                    <td><?php echo $user['date']; ?> </td>
                    <td><?php echo $user['time']; ?> </td>
                    <td><?php echo $user['persona']; ?> </td>
                    <td><a href="index.php?page=edit_rezervimi&id=<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td><a href="delete_rezervimi.php?id=<?php echo $user ['id']; ?>" class="btn btn-danger">Delete</a></td></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>