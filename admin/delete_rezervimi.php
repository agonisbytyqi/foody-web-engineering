<?php 
    include '../config/dbconfig.php';
    if ($_SESSION['permission'] == 1 || $_SESSION['permission'] == 0) {


        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $query = "DELETE FROM rezervimi WHERE id = :id";
        $query = $conn->prepare($query);

        $query->execute(['id'=>$id]);

        header("Location: index.php?page=rezervimet");

    } else {
        header("Location: test.php");
    }
?>