<?php
session_start();

require '../config/dbconfig.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = '';

    $sql = 'INSERT INTO staff(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)';
    $query = $conn->prepare($sql);
    if (empty($username)) {
        $message = "Username is required!";
    } else {
        $query->bindParam('username', $username);
    }
    if (empty($name)) {
        $message = "Name is required!";
    } else {
        $query->bindParam('name', $name);
    }
    if (empty($surname)) {
        $message = "Surname is required!";
    } else {
        $query->bindParam('surname', $surname);
    }
    if (empty($email)) {
        $message = "Email is required!";
    } else {
        $query->bindParam('email', $email);
    }
    if (empty($password)) {
        $message = "Password is required!";
    } else {
        $query->bindParam('password', $password);
    }


    if($query->execute()){
        $message = "User successfully added!";
    } else {
        $message = "A problem occured creating your account!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="icon" href="../images/icon/logo.ico" type="image/icon type">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
            <br>
        <div class="card" style="width: 500px; margin: 0 auto">
            <div class="card-header">
                Add User
            </div>
            <form action="add_user.php" method="post" class="p-1">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="6">
                </div> 
                <div class="mt-2">
                <input type="submit" name="submit" value="Add User" class="btn btn-primary mt-1">
                <a href="index.php?page=staff" class="btn btn-primary mt-1">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>