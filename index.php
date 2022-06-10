<?php 
    require 'config/dbconfig.php';
    // Quote php
    $queryTopQuote = $conn->query('SELECT * FROM quotes ORDER BY quote_id DESC LIMIT 1');
    $topQuote = $queryTopQuote->fetchAll();
    // ADD POST PHP
    $queryTop = $conn->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 1');
    $topPost = $queryTop->fetchAll();

    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Foody</title>
        <link rel="icon" href="images/icon/logo.ico" type="image/icon type">
    </head>
    <body>
        <!-- Navigation Bar-->
        <div class="naviBar">
             <?php include "inc/nav.php"?>
       </div>
       <!--End of navBar-->
        <div id="WELCOME">
            <div class="hero">
                <div class="container">
                    <div class="first">
                    <?php foreach($topQuote as $topquote) :?>
                        <h1><?php echo $topquote['quote'] ?></h1>
                        <img src="images/seperator.png" alt="No image found!">
                        <h3><?php echo $topquote['description'] ?><br>
                            <?php echo $topquote['description2'] ?></h3>
                    <?php endforeach;?>
                        <div class="ourMenu">
                            <a href="#section1"><p>OUR MENU</p></a>   
                        </div>
                    </div>
                    <div class="second">
                        <div class="aboutInfo">
                        <?php foreach($topPost as $toppost) : ?>
                        <img src="admin/uploads/<?php echo $toppost['image'] ?>" alt="No image found">
                            <div id="box">
                                <h2><?php echo $toppost['title'] ?></h2>
                                <hr style="border-top: 1px dotted">
                                <div>
                                    <h6><?php echo $toppost['description'] ?></6> 
                                </div>
                            <?php endforeach; ?>
                                <div class="more">
                                    <a href="more.php"  id="button"><p>MORE</p></a>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="quote">
                        <div class="container">
                            <h1 style="font-size: 20px; font-family: Montserrat Regular; padding-top: 195px;">“THE MOST ROMANTIC RESTAURANT OUT THERE”</h1>
                            <h3 style="font-family: Lobster Two Regular; font-size: 20px; font-weight: lighter;">John Doe</h3>
                        </div>
                    </div>
            </div>
        </div>
        <div id="section1">
            <div class="menu">
                <div class="container">
                    <div id="heading">
                        <h1>We Present You Our Menu</h1>
                    </div>
                    <div class="items">
                        <img src="images/foods/fitnessMeal.jpg" alt="No image found!">
                        <div class="bgMenu">
                            <h1>Grilled Chicken Steak</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                        <img src="images/foods/menuHamburger.jpg" alt="No image found!">
                        <div class="bgMenu">
                            <h1>Hamburger</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="bgMenu">
                            <h1>Cooked Jasmine Rice</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                        <img src="images/foods/beef.jpg" alt="No image found!">
                        <div class="bgMenu">
                            <h1>Beef Steak</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                        <img src="images/foods/korean.jpg" alt="No image found!">
                    </div>
                    <div class="items">
                        <img src="images/foods/eggs.jpg" alt="No image found!">
                        <div class="bgMenu">
                            <h1>Fried Eggs</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                        <img src="images/foods/salmon.jpg" alt="No image found!">
                        <div class="bgMenu">
                            <h1>Fresh Salmon Fillets</h1>
                            <h2>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula.</h2>
                            <p>19,99$</p>
                        </div>
                    </div>
                    <div id="lastHeading">
                        <h1>Show Me More</h1>
                        <div class="showMore">
                            <a href="#emptyDiv"><img src="images/arrow.png" alt="No image found!"></a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div id="VIDEOTOUR">
            <div class="frameVideo">
                <iframe src="https://www.youtube.com/embed/lcU3pruVyUw" height="482" width="100%" allowfullscreenframeborder="0" ></iframe>
            </div>
        </div>
        <div id="emptyDiv"></div>
        <div id="slider">
            <div class="container">
                <div class="slidershow middle">

                    <div class="slides">
                      <input type="radio" name="r" id="r1" checked>
                      <input type="radio" name="r" id="r2">
                      <input type="radio" name="r" id="r3">
                      <input type="radio" name="r" id="r4">
                      <input type="radio" name="r" id="r5">
                      <div class="slide s1">
                        <img src="images/foods/beef.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="images/foods/fillet.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="images/foods/fitnessMeal.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="images/foods/pizza.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="images/foods/grilledChicken.jpg" alt="">
                      </div>
                    </div>
              
                    <div class="navigation">
                      <label for="r1" class="bar"></label>
                      <label for="r2" class="bar"></label>
                      <label for="r3" class="bar"></label>
                      <label for="r4" class="bar"></label>
                      <label for="r5" class="bar"></label>
                    </div>
                  </div>
            </div>
        </div>
        <div class="stayUpToDate">
            <div class="container">
                <h1>Stay up to date</h1>
                <div id="par">
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada.</p>
                </div>
                <div class="subscribe">
                    <form action="php/subscribe.php" method="post">
                        <input class="email" type="email" name="email" placeholder="Email Address" required="">
                        <button type="submit" name="subscribe" value="subscribe">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="images">
            <div class="container">
                <div id="imgContainer">
                    <div id="img1">
                        <img src="images/foods/fillet.jpg" alt="No imageFound!">
                    </div>
                    <div id="img2">
                        <img src="images/foods/pica.jpg" alt="No imageFound!">
                    </div>
                    <div id="img3">
                        <img src="images/foods/grilledChicken.jpg" alt="No imageFound!">
                    </div>
                </div>
            </div>
        </div>
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
    </body>
    <footer>
        <div class="footer">
            <div class="container">
                <p>Copyright 2022 © Foody - All Rights Reserved</p>
                <a href="#"><img src="images/Facebook.png" alt="No image found!" style="margin-left: 690px;"></a>
                <a href="#"><img src="images/Instagram.png" alt="No image found!"></a>
                <a href="#"><img src="images/Twitter.png" alt="No image found!"></a> 
            </div>
        </div>
    </footer>
</html>