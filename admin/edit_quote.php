<?php
require '../config/dbconfig.php';
if ($_SESSION['permission'] == 1 || $_SESSION['permission'] == 0) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM quotes WHERE quote_id = :id';
    $query = $conn->prepare($sql);
    $query->execute(['id' => $id]);

    $quote = $query->fetch();

    if (isset($_POST['submit'])) {
        $quote = $_POST['quote'];
        $description = $_POST['description'];
        $description2 = $_POST['description2'];

        $sql = 'UPDATE quotes SET quote = :quote, description = :description, description2 = :description2 WHERE quote_id = :id';
        $query = $conn->prepare($sql);
        if (empty($quote)) {
            $message = "Quote is required";
        } else {
            $query->bindParam('quote', $quote);
        }
        if (empty($description)) {
            $message = "Description is required";
        } else {
            $query->bindParam('description', $description);
        }
        if (empty($description2)) {
            $message = "Description2 is required";
        } else {
            $query->bindParam('description2', $description2);
        }
        $query->bindParam('id', $id);

        $query->execute();

        header('Location: index.php?page=quotes');
    }
?>
    <div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <h1>Edit Quotes</h1>
        <form method="post">
            <div class="form-group">
                <label for="quote">Quote:</label>
                <input type="text" name="quote" id="quote" class="form-control" value="<?php echo $quote['quote'] ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" value="<?php echo $quote['description'] ?>" required>
            </div>
            <div class="form-group">
                <label for="description2">Description2:</label>
                <input type="text" name="description2" id="description2" class="form-control" value="<?php echo $quote['description2'] ?>" required>
            </div>
            <br>
            <input type="submit" value="Edit Quote" name="submit" class="btn btn-primary">
            <a href="index.php?page=quotes" class="btn btn-primary ">Go Back</a>
        </form>
    </div>

<?php } else {
    header('Location: test.php');
} ?>