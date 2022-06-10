<?php
session_start();

require '../config/dbconfig.php';
if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $persona = $_POST['persona'];

    $sql = 'INSERT INTO rezervimi (emri, email, date, time, persona) VALUES (:emri, :email, :date, :time, :persona)';
    $query = $conn->prepare($sql);
    if (empty($emri)) {
        $message = "Emri is required!";
    } else {
        $query->bindParam('emri', $emri);
    }
    if (empty($email)) {
        $message = "Email is required!";
    } else {
        $query->bindParam('email', $email);
    }
    if (empty($date)) {
        $message = "Date is required!";
    } else {
        $query->bindParam('date', $date);
    }
    if (empty($time)) {
        $message = "Time is required!";
    } else {
        $query->bindParam('time', $time);
    }
    if (empty($persona)) {
        $message = "Personat is required!";
    } else {
        $query->bindParam('persona', $persona);
    }


    if($query->execute()){
        $message = "Termini u shtua me sukses!";
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
    <link rel="icon" href="../images/icon/logo.ico" type="image/icon type">
    <title>Signup</title>
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
                Shto Terminin e ri
            </div>
            <form  onsubmit="return (validate());" action="add_rezervimi.php" method="post" class="p-1" name="myForm">
                <div class="form-group">
                    <label for="emri">Emri:</label>
                    <input type="text" name="emri" id="emri" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date" value="data" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="email">time:</label>
                    <input type="time" name="time" id="time" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Persona">Persona:</label>
                    <input type="number" name="persona" id="persona" value="Personat" class="form-control" value="<?php echo $user['persona'] ?>" required min=1 max=20>
                </div>
                <div class="mt-2">
                    <input type="submit" name="submit" value="Add User" class="btn btn-primary mt-1">
                    <a href="index.php?page=rezervimet" class="btn btn-primary mt-1">Go Back</a>
                </div>
            </form>
        </div>
    </div>
    <script src ="js/javascript.js"></script>
</body>
</html>