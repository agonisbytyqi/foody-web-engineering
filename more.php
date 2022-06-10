<?php
    require "config/dbconfig.php";
    $queryTopPosts = $conn->query('SELECT * FROM posts ORDER BY post_id DESC');
    $topPosts = $queryTopPosts->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="images/icon/logo.ico" type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>More</title>
</head>
<body>
    <div class="naviBar">
         <?php include "inc/nav.php"?>
    </div>
    <!-- End of NAVBAR -->
    
    <!-- CONTENT -->

    <div class="container" style="margin-top: 100px;">
        <?php foreach ($topPosts as $TopPost) :?>
            <div class="card mb-3 ml-5" style="max-width: 960px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img style="max-height:350px; max-width: 300px;" src="admin/uploads/<?php echo $TopPost['image'] ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: Lobster Two Regular; color: #28374b;" ><?php echo $TopPost['title'] ?></h5>
                            <p class="card-text" style="font-family: Montserrat Regular; color: #28374b;"><?php echo $TopPost['more_description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>