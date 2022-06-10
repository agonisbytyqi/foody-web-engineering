<?php
    //PDO (PHP DATA OBJECTS)
    $servername = "localhost";
    $username ="root";
    $password = "";
    $database = "db_rezervo";

    //Krijimi dhe kontrollimi i lidhjes
    try{
        $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Lidhja deshtoi..." . $e->getMessage();
    }
?>