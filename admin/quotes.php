<?php 

require '../config/dbconfig.php';
$query = $conn->query('SELECT * FROM quotes');
$quotes = $query->fetchAll();

if($_SESSION['permission']==1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
<div class="container">
    <h1>Quotes</h1>
    <table class="table">
        <thead>
        <tr><td></td></tr>
        
        <tr>
            <td>
            <a href="index.php?page=add_quotes" class="btn btn-primary">Add Quote</a>
            </td>
        </tr>
                <th scope="col">Quote_id</th>
                <th scope="col">Quote</th>
                <th scope="col">Description</th>
                <th scope="col">Description2</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quotes as $quote) : ?>
                <tr>
                    <td><?php echo $quote['quote_id']; ?></td>
                    <td><?php echo $quote['quote']; ?></td>
                    <td><?php echo $quote['description']; ?></td>
                    <td><?php echo $quote['description2']; ?></td>
                    <td><a href="index.php?page=edit_quote&id=<?php echo $quote['quote_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_quote&id=<?php echo $quote['quote_id']; ?>" class="btn btn-danger">Delete</a></td>
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