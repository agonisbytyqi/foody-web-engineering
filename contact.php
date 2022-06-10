<?php
    //Lista e perdoruesve "index"
    require 'config/dbconfig.php';

    if(isset($_POST['SEND'])){
        $emri = $_POST ['emri'];
        $email = $_POST ['email'];
        $date = $_POST ['date'];
        $time = $_POST ['time'];
        $persona = $_POST ['persona'];
        

        $sql = 'INSERT INTO rezervimi (emri, email, date, time, persona) VALUES (:emri, :email, :date, :time, :persona)';
        $query = $conn->prepare($sql);

        //Bind parametrat
        $query -> bindParam('emri', $emri);
        $query -> bindParam('email', $email);
        $query -> bindParam('date', $date);
        $query -> bindParam('time', $time);
        $query -> bindParam('persona', $persona);

        $query -> execute();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contactForm.css">
    <title>Foody</title>
    <link rel="icon" href="images/icon/logo.ico" type="image/icon type">
</head>
<body>
    <div class="picture-Container">
        <!-- Navigation Bar-->
        <div class="naviBar">
            <?php include "inc/nav.php"?>
        </div>
        <div class="empty" style="height: 150px;"></div>
        <div class="container">
            <div class="form">
                <form id ="contactForm" action="contact.php" name="myForm"  method="post" onsubmit="return (validate());">
                    <fieldset>
                    <legend>Rezervo</legend>
                    <table id="table-form" class="table-form">
                            <tr>     
                                <td class="fonts1">Emri Rezervues:</td>
                                <td><input id = "emri" class="fonts2" type="text" name="emri" ></td>
                            </tr>
                            <tr>
                                <td class="fonts1">Email:</td>
                                <td><input id="email" class="fonts2" type="email" name="email" placeholder="email@example.com"></td>
                            </tr>
                            <tr>
                                <td class="fonts1">Data:</td>
                                <td><input id="data" class="fonts2" name="date" type="date" value="date"></td>
                            </tr>
                            <tr>
                                <td class="fonts1">Koha:</td>
                                <td><input id="koha" class="fonts2" type="time" value="time" required="Trego" name="time"></td>
                            </tr>
                            <tr>
                                <td><label for="Persona">Persona:</label></td>
                                <td><input type="number" name="persona" id="persona" value="persona" class="form-control" required min=1 max=20></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input id="submitt" type="submit" name="SEND" value="Rezervo" class="submit" ></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="empty1"></div>
        <div id="contact">
                <div class="subFooter">
                    <div class="container">
                        <div class="firstLine">
                            <h1>LOCATIONS</h1>
                            <h1>HOURS</h1>
                        </div>
                        <div class="secondLine">
                            <h3>
                                678 Some Awesome<br>
                                Brooklyn,NY -112233
                            </h3>
                            <h3>
                                678 Some Awesome<br>
                                Brooklyn,NY -112233
                            </h3>
                            <h3 style="margin-left: 255px;">
                                Monday - Thursday<br>
                                08:00am - 11:00pm
                            </h3>
                            <h3>
                                Friday - Saturday<br>
                                08:00am - 12:00pm
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="footer">
            <div class="container">
                <p>Copyright 2017 © Foody - All Rights Reserved</p>
                <a href="#"><img src="images/Facebook.png" alt="No image found!" style="margin-left: 690px;"></a>
                <a href="#"><img src="images/Instagram.png" alt="No image found!"></a>
                <a href="#"><img src="images/Twitter.png" alt="No image found!"></a> 
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src ="js/javascript.js"></script>
</html>