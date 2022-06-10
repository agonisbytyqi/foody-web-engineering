<?php 

    require '../config/dbconfig.php';
    $query = $conn->query('SELECT * FROM staff');
    $users = $query->fetchAll();

    if($_SESSION['permission']==1){
?>


<div class="container">
    <h1>Staff</h1>
    <table class="table">
        <thead>
            <tr>
                <td></td>
            </tr>
            <tr>
            <td><a href="add_user.php" class="btn btn-primary">Add User</a></td>
            </tr>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Permissions</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['surname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['permission']; ?></td>
                    <td><a href="index.php?page=edit_user&id=<?php echo $user['user_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_user&id=<?php echo $user['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    } else {
        header ('Location: index.php?page=test');
    }
?>