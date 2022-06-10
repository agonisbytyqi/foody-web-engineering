<?php

    session_start();

    session_destroy();
    session_unset();

    session_start();

    require '../config/dbconfig.php';

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = '';

        $query = $conn->prepare('SELECT * FROM staff WHERE username = :username');
        $query->bindParam(':username',$username);
        $query->execute();

        $user = $query->fetch();

        if($user > 0 && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['permission'] = $user['permission'];

            header("Location: index.php");

        } else {
            $message = "Sorry, those credentials do not match!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon/logo.ico" type="image/icon type">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="card mt-5" style="width: 500px; margin: 0 auto">
                <div class="card-header">
                    Login
                </div>

                <form action="login.php" method="post" class="p-4">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
</body>

</html>