<?php
    //Lista e perdoruesve "index"
    require '../config/dbconfig.php';

    if(isset($_POST['subscribe'])){
        $email = $_POST ['email'];
        

        $sql = 'INSERT INTO subscribe (email) VALUES (:email)';
        $query = $conn->prepare($sql);

        //Bind parametrat
        $query -> bindParam('email', $email);

        $query -> execute();
        
        header("Location: ../index.php#emptyDiv");
    }
?>