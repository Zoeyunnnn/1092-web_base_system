<?php
session_start();
include('db_conn.php');
include("fun-inc.php");
?>
<html> 
<head> 
    <?php htmlHead(); ?>
    <?php product(); ?>
    <title>Lynnlin</title>
    <script scr="js/index.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

    <style>
        #user{
            position: absolute;
            right: 3vw;
            top: 3.5vh;
        }
    </style>
</head> 
<body>
    <?php navBar()?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width:65%; margin:0px auto; top: -3vh;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="image/new/141.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="image/dress/9.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="image/new/7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="image/outwear/8.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="image/garment/1.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="link-top2"></div>
    <div class="container" style="margin-top: 5vh;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="/image/new/S__51110155.jpg" style="background-image: url(image/new/S__51110155.jpg);">
                    <div class="categories__hover__text">
                        <h5 style="line-height: 4vh !important;">NEW</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/garment/S__51110092.jpg" style="background-image: url(image/garment/S__51110092.jpg);">
                    <div class="categories__hover__text" style="width:10vw !important;">
                        <h5 style="line-height: 4vh !important;">GARMENT</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/dress/S__51110176.jpg" style="background-image: url(image/dress/S__51110176.jpg);">
                    <div class="categories__hover__text">
                        <h5 style="line-height: 4vh !important;">DRESS</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/outwaer/S__51109934.jpg" style="background-image: url(image/outwear/S__51109934.jpg); -webkit-filter:brightness(1.4);">
                    <div class="categories__hover__text" style="width:10vw !important;">
                        <h5 style="line-height: 4vh !important;">OUTWEAR</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="link-top3"></div>
    <div class="newarrival">
        <h1 style="margin-top: 2vh; font-size: 3vw; width: 17vw; font-family: 'Caveat', cursive; background: #E8DAB2; color: #4F6D7A !important; margin-left: 7rem;">NEW ARRIVAL</h1>
    </div>
    <div class="row" style=" width: 1100; margin: 0px auto;">
        <div class="col" style="margin-top: 2vh; width: 570; margin-right: -12px;">
            <a href="productMain.php?向日葵泡泡袖附腰帶短洋裝"><img src="image/img2.png" style="width:547.25px"></a>
        </div>
        <div class="col" style="margin-top: 2vh; width: 570; margin-left: -12.5px;">
            <a href="productMain.php?俐落牛仔裙兩件套裝"><img src="image/img3.png" style="width:560.25px"></a>
        </div>
    </div>
    <div class="link-top4"></div>
    <div class="ranktype">
        <h1 style="font-size: 3vw; width: 7vw; font-family: 'Caveat', cursive; background: #E8DAB2; color: #4F6D7A !important; margin-left: 7rem;">RANK</h1>
    </div>
    <marquee bgcolor="#dcdcdc" behavior="scroll" loop="infinite" direction='left' scrollamount="10" style="margin-top: 2vh; width:60vw; margin-left: 20vw;" onMouseOver="this.stop()" onMouseOut="this.start()">
        <img src="image/dress/18.jpg" style="width:280px; height:50% !important;">
        <img src="image/new/12.jpg" style="width:280px; height:50% !important;">
        <img src="image/garment/13.jpg" style="width:280px; height:50% !important;">
        <img src="image/garment/14.jpg" style="width:280px; height:50% !important;">
        <img src="image/garment/15.jpg" style="width:280px; height:50% !important;">
        <img src="image/outwear/17.jpg" style="width:280px; height:50% !important;">
        <img src="image/new/21.jpg" style="width:280px; height:50% !important;">
        <img src="image/dress/22.jpg" style="width:280px; height:50% !important;">
        <img src="image/garment/26.jpg" style="width:280px; height:50% !important;">
        <img src="image/new/30.jpg" style="width:280px; height:50% !important;">
    </marquee>
    <?php getfooter()?>
</body> 
</html> 