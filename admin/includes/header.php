<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon/logo.ico" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="Bootstrapcss/bootstrap.min.css">
    <title>Nav</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Foody Staff</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=staff"><b>Staff</b> <span class="sr-only"><b>(ADMIN ONLY)</b></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=quotes"><b>Quotes </b><span class="sr-only"><b>(ADMIN ONLY)</b></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=rezervimet">Rezervimet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=Subscribes">Subscribes</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="btn btn-warning" >Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="bootstrapjs/bootstrap.min.js"></script>
</body>
</html>
