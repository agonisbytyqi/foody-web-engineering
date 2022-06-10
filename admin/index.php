<?php

require '../config/dbconfig.php';

session_start();

if (isset($_SESSION['permission'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icon/logo.ico" type="image/icon type">
        <title>(ADMIN) CPANEL</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>

    <body>
        <?php
            include "includes/header.php";
        ?>

        <?php
            switch(@$_GET['page']){
                case 'rezervimet';
                    include "users.php";
                    break;
                case 'edit_user';
                    include 'edit_user.php';
                    break;
                case 'delete_user';
                    include 'delete_user.php';
                    break;
                case 'posts';
                    include 'posts.php';
                    break;
                case 'add_post';
                    include 'add_post.php';
                    break;
                case 'delete_post';
                    include 'delete_post.php';
                break;
                case 'staff';
                    include 'staff.php';
                    break;
                case 'edit_rezervimi';
                    include 'edit_rezervimi.php';
                break;
                case 'edit_post';
                    include 'edit_post.php';
                break;
                case 'test';
                    include 'test.php';
                break;
                case 'Subscribes';
                    include 'subscribes.php';
                break;
                case 'delete_sub';
                    include 'delete_sub.php';
                break;
                case 'quotes';
                    include 'quotes.php';
                break;
                case 'delete_quote';
                    include 'delete_quote.php';
                break;
                case 'add_quotes';
                    include 'add_quotes.php';
                break;
                case 'edit_quote';
                    include 'edit_quote.php';
                break;
                default:
                    include "users.php";
            }
        ?> 


       
    </body>
        <?php include "includes/footer.php"; ?>
    </html>
    
<?php

} else {
    header('Location: login.php');
}

?>