<?php
require '../config/dbconfig.php';
if ($_SESSION['permission'] == 1 || $_SESSION['permission'] == 0) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM rezervimi WHERE id = :id';
    $query = $conn->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();

    if (isset($_POST['submit'])) {
        $emri = $_POST['emri'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $persona = $_POST['persona'];

        $sql = 'UPDATE rezervimi SET emri = :emri, email = :email, date = :date, time = :time, persona = :persona WHERE id = :id';
        $query = $conn->prepare($sql);
        if (empty($emri)) {
            $message = "Emri is required";
        } else {
            $query->bindParam('emri', $emri);
        }
        if (empty($email)) {
            $message = "Email is required";
        } else {
            $query->bindParam('email', $email);
        }
        if (empty($date)) {
            $message = "date is required";
        } else {
            $query->bindParam('date', $date);
        }
        if (empty($time)) {
            $message = "time is required";
        } else {
            $query->bindParam('time', $time);
        }
        $query->bindParam('persona', $persona);
        $query->bindParam('id', $id);

        $query->execute();

        header('Location: index.php?page=rezervimet');
    }
?>
    <div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <h1>Edit Rezervimi</h1>
        <form method="post">
            <div class="form-group">
                <label for="username">Emri:</label>
                <input type="text" name="emri" id="emri" class="form-control" value="<?php echo $user['emri'] ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="surname">date:</label>
                <input type="date" name="date" id="date" class="form-control" value="<?php echo $user['date'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">time:</label>
                <input type="time" name="time" id="time" class="form-control" value="<?php echo $user['time'] ?>" required>
            </div>
            <div class="form-group">
                <label for="Persona">Persona:</label>
                <input type="number" name="persona" id="persona" class="form-control" value="<?php echo $user['persona'] ?>" required min=1 max=20>
            </div>
            <br>
            <input type="submit" value="Edit User" name="submit" class="btn btn-primary">
            <a href="index.php?page=rezervimet" class="btn btn-primary ">Go Back</a>
        </form>
    </div>

<?php } else {
    header('Location: test.php');
} ?>