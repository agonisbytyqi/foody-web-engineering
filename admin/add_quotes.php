<?php

require '../config/dbconfig.php';

if (isset($_POST['submit'])) {
    $quote = $_POST['quote'];
    $description = $_POST['description'];
    $description2 = $_POST['description2'];

    $sql = 'INSERT INTO quotes(quote, description, description2) VALUES (:quote, :description, :description2)';
    $query = $conn->prepare($sql);
    if (empty($quote)) {
        $message = "Quote is required!";
    } else {
        $query->bindParam('quote', $quote);
    }
    if (empty($description)) {
        $message = "description is required!";
    } else {
        $query->bindParam('description', $description);
    }
    if (empty($description2)) {
        $message = "description is required!";
    } else {
        $query->bindParam('description2', $description2);
    }

    if($query->execute()){
        $message = "Quote successfully added!";
    } else {
        $message = "A problem occured creating your quote!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quote</title>
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
        <div class="card mb-2" style="width: 500px; margin: 0 auto">
            <div class="card-header">
                Add Quote
            </div>
            <form action="add_quotes.php" method="post" class="p-1">
                <div class="form-group">
                    <label for="quote">Quote:</label>
                    <input type="text" name="quote" id="quote" class="form-control" required maxlength="35" required minlength="15">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" required maxlength="35" required minlength="15">
                </div>
                <div class="form-group">
                    <label for="description2">Description2:</label>
                    <input type="text" name="description2" id="description" class="form-control" required maxlength="35" required minlength="15">
                </div> 
                <div class="mt-2">
                <input type="submit" name="submit" value="Add Quote" class="btn btn-primary mt-1">
                <a href="index.php?page=quotes" class="btn btn-primary mt-1">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>